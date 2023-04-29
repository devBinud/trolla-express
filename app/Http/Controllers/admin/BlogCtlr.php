<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use App\Utils\HttpMethodUtil;
use App\Utils\JsonUtil;
use App\Utils\RegexUtil;
use App\Utils\Generator;
use Exception;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Facades\File;

class BlogCtlr extends Controller
{
    private $blog;

    public function __construct()
    {

        $this->blog = new Blog();
    }

    public function index(Request $request)
    {
        $action = $request->get('action') ?? '';

        switch ($action) {
            case 'add-blog-cattegory':
                return $this->addBlogCategory($request);
                break;
            case 'all-blog-category':
                return $this->allBlogCategory($request);
                break;
            case 'edit-category':
                return $this->editCategory($request);
                break;
            case 'delete-category':
                return $this->deleteCategory($request);
                break;
            case 'add-blog':
                return $this->addBlog($request);
                break;
            case 'edit-blog':
                return $this->editBlog($request);
                break;
            case 'all-blog':
                return $this->allBlog($request);
                break;
            case 'delete-blog':
                return $this->deleteBlog($request);
                break;
            default:
                return abort(404);
                break;
        }
    }
    public function addBlogCategory(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('admin.blog.add-blog-category')->with([
                'page' => 'add-category',
            ]);
        } elseif (HttpMethodUtil::isMethodPost()) {
            $catname = $request->get('catname') ?? '';
            $slug = $request->get('slug') ?? '';
            $catdesc = $request->get('catdesc') ?? '';


            // * Validation *
            // Cat Name
            if (empty($catname) || $catname == "") {
                return JsonUtil::getResponse(false, "Category name is required !", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            // Slug 
            if (empty($slug) || $slug == "") {
                return JsonUtil::getResponse(false, "Slug is required !", JsonUtil::$_UNPROCESSABLE_ENTITY);
            } elseif ($this->blog->isCatSlugAvailable($slug)) {
                return JsonUtil::getResponse(false, "Slug is already available ! Please change the Slug!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }


            // description 
            if (empty($catdesc) || $catdesc == "") {
                return JsonUtil::getResponse(False, "Description is required !", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            try {
                $Data = [
                    'cat_name' => $catname,
                    'cat_slug' => $slug,
                    'cat_desc' => $catdesc,
                    'created_at' => date('Y-m-d H:i:s')
                ];

                $this->blog->addCategory($Data);

                return JsonUtil::getResponse(true, "Category added successfully !", JsonUtil::$_STATUS_OK);
            } catch (Exception $e) {
                // return JsonUtil::getResponse(false, $e->getMessage(), 500);
                return JsonUtil::serverError();
            }
        } else {
            return JsonUtil::getResponse(false, "Something went wrong...", JsonUtil::$_STATUS_OK);
        }
    }

    public function allBlogCategory()
    {
        if (HttpMethodUtil::isMethodGet()) {
            $category = $this->blog->allBlogCategory();
            $sn = ($category->currentPage() - 1) * $category->perPage();
            return view('admin.blog.all-blog-category')->with([
                'page' => 'all-category',
                'category' => $category,
                'sn' => $sn,
            ]);
        } else {
            return JsonUtil::methodNotAllowed();
        }
    }

    public function editCategory(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            $catId = $request->get('cat_id') ?? '';
            if (!RegexUtil::isNumeric($catId) || !$this->blog->isCategoryIdValid($catId)) {
                return JsonUtil::getResponse(false, "Invalid ID...", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            $catData = $this->blog->getSingleCategory($catId);
            return view('admin.blog.edit-category')->with([
                'page' => 'all-category',
                'catData' => $catData,
            ]);
        } elseif (HttpMethodUtil::isMethodPost()) {
            $catId = $request->get('cat_id') ?? '';
            $catname = $request->get('catname') ?? '';
            $slug = $request->get('slug') ?? '';
            $currentSlug = $this->blog->getCatById($catId)->cat_slug;
            $catdesc = $request->get('catdesc') ?? '';


            // * Validation *
            // Cat Name
            if (empty($catname) || $catname == "") {
                return JsonUtil::getResponse(false, "Category name is required !", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }


            // Slug 
            if (empty($slug) || $slug == "") {
                return JsonUtil::getResponse(false, "Slug is required!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            } elseif ($this->blog->isCatSlugAvailable($slug)) {
                if (!$this->blog->isSlugAndCatIdMatched($catId, $slug)) {
                    if ($slug != $currentSlug) {
                        return JsonUtil::getResponse(false, "Slug is already available ! Please change the Slug !", JsonUtil::$_UNPROCESSABLE_ENTITY);
                    }
                }
            }

            // description 
            if (empty($catdesc) || $catdesc == "") {
                return JsonUtil::getResponse(False, "Description is required !", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            DB::beginTransaction();
            try {
                $Data = [
                    'cat_name' => $catname,
                    'cat_slug' => $slug,
                    'cat_desc' => $catdesc,
                    'updated_at' => date('Y-m-d H:i:s')
                ];

                $this->blog->updateCategory($catId, $Data);

                DB::commit();
                return JsonUtil::getResponse(true, "Category updated successfully !", JsonUtil::$_STATUS_OK);
            } catch (Exception $e) {
                DB::rollBack();
                // return JsonUtil::getResponse(false, $e->getMessage(), 500);
                return JsonUtil::serverError();
            }
        } else {
            return JsonUtil::getResponse(false, "Something went wromg !", JsonUtil::$_STATUS_OK);
        }
    }

    public function deleteCategory(Request $request)
    {
        if (HttpMethodUtil::isMethodPost()) {
            $catId = $request->get('cat_id') ?? '';
            // dd($blogId);
            if (!RegexUtil::isNumeric($catId) || !$this->blog->isCategoryIdValid($catId)) {
                return JsonUtil::getResponse(false, "Invalid ID", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            try {
                $this->blog->deleteCategory($catId);
                return JsonUtil::getResponse(true, "Category Deleted Successfully !", JsonUtil::$_STATUS_OK);
            } catch (Exception $e) {
                // return JsonUtil::getResponse(false, $e->getMessage(), JsonUtil::$_BAD_REQUEST);
                return JsonUtil::serverError();
            }
        } else {
            return JsonUtil::getResponse(false, "Something went wrong..", JsonUtil::$_STATUS_OK);
        }
    }


    public function addBlog(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('admin.blog.add-blog')->with([
                'page' => 'blog',
                'category' => $this->blog->allBlogCategory(),

            ]);
        } elseif (HttpMethodUtil::isMethodPost()) {
            $status = $request->get('status') ?? '';
            $image = $request->file('image') ?? '';
            $title = $request->get('title') ?? '';
            $slug = $request->get('slug') ?? '';
            $author = $request->get('author') ?? '';
            $metaogurl = $request->get('metaogurl') ?? '';
            $description = $request->get('description') ?? '';
            $metaDescription = $request->get('metaDescription') ?? '';
            $metaKeywords = $request->get('metaKeywords') ?? '';
            $supportedImgExtensions = ["jpg", "jpeg", "png"];

            $blogImageName = null;

            // * Validation *



            // Image
            if (empty($image)) {
                return JsonUtil::getResponse(false, "Image is required !", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            // Category
            $categories = $request->get('categories') ?? '';

            if ($categories != null) {
                $catName = implode(",", array_unique($categories));
            } else {
                return JsonUtil::getResponse(false, "Select Categories", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            // Title
            if (empty($title) || $title == "") {
                return JsonUtil::getResponse(false, "Title is required !", JsonUtil::$_UNPROCESSABLE_ENTITY);
            } elseif ($this->blog->isBlogTileAvailable($title)) {
                return JsonUtil::getResponse(false, "Title is already available ! Please change the Title !", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            // Slug
            if (empty($slug) || $slug == "") {
                return JsonUtil::getResponse(false, "Slug cannot be empty!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            } elseif ($this->blog->isSlugAvailable($slug)) {
                return JsonUtil::getResponse(false, "Slug is already available ! Please change the slug!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            // Description
            if (empty($description)) {
                return JsonUtil::getResponse(false, "Description is required !", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            // Meta Description
            if (empty($metaDescription)) {
                return JsonUtil::getResponse(false, "Meta Description is required !", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            // Meta Keywords
            if (empty($metaKeywords)) {
                return JsonUtil::getResponse(false, "Meta Keywords is required !", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            // Image
            if ($image != null) {
                $ext = $image->getClientOriginalExtension();
                if (in_array(strtolower($ext), $supportedImgExtensions)) {
                    if ($image->getSize() > (1024 * 1024 * 4)) {
                        return JsonUtil::getResponse(false, "Image supported file size is 4 MB", JsonUtil::$_UNPROCESSABLE_ENTITY);
                    } else {
                        $blogImageName = 'blog_image_' . Generator::getRandomString(5, false, false) . time() . '.' . $ext;
                        $blogImgupload = $image->storeAs('/blog-img', $blogImageName);
                        if ($blogImgupload) {
                        } else {
                            return JsonUtil::getResponse(false, "Image cannot be uploaded. Something went wrong", JsonUtil::$_UNPROCESSABLE_ENTITY);
                        }
                    }
                } else {
                    return JsonUtil::getResponse(false, "Invalid file format. Supported only jpg,jpeg,png", JsonUtil::$_UNPROCESSABLE_ENTITY);
                }
            }
            // Status
            if (empty($status)) {
                return JsonUtil::getResponse(false, "Please select status !", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }
            DB::beginTransaction();
            try {

                $blogData = [
                    'is_published' => $status,
                    'title' => $title,
                    'cat_names' => $catName,
                    'slug' => $slug,
                    'image' => $blogImageName,
                    'description' => $description,
                    'author' => $author,
                    'meta_description' => $metaDescription,
                    'meta_keywords' => $metaKeywords,
                    'meta_url' => $metaogurl,
                    'created_at' => date('Y-m-d H:i:s')
                ];
                $this->blog->addBlog($blogData);

                DB::commit();
                return JsonUtil::getResponse(true, "Blog added successfully", JsonUtil::$_STATUS_OK);
            } catch (Exception $e) {
                DB::rollBack();
                // return JsonUtil::getResponse(false, $e->getMessage(), 500);
                return JsonUtil::serverError();
            }
        } else {
            return JsonUtil::getResponse(false, "Something went wrong..", JsonUtil::$_STATUS_OK);
        }
    }

    public function editBlog(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            $blogId = $request->get('blog_id') ?? '';
            if (!RegexUtil::isNumeric($blogId) || !$this->blog->isBlogIdValid($blogId)) {
                return JsonUtil::getResponse(false, "Invalid ID", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            $blogData = $this->blog->getSingleBlog($blogId);
            // dd($blogData);
            return view('admin.blog.edit-blog')->with([
                'page' => 'blog',
                'blogdata' => $blogData,
                'category' => $this->blog->allBlogCategory(),


            ]);
        } elseif (HttpMethodUtil::isMethodPost()) {
            $blogId = $request->get('blog_id') ?? '';
            $status = $request->get('status') ?? '';
            $image = $request->file('image') ?? '';
            $previmg = $request->get('previmg') ?? '';
            $title = $request->get('title') ?? '';
            $currentSlug = $this->blog->getBlogById($blogId)->title;
            $slug = $request->get('slug') ?? '';
            $author = $request->get('author') ?? '';
            $metaogurl = $request->get('metaogurl') ?? '';
            $description = $request->get('description') ?? '';
            $metaDescription = $request->get('metaDescription') ?? '';
            $metaKeywords = $request->get('metaKeywords') ?? '';

            $imageName = null;

            // * Validation *
            // Image
            if (empty($previmg)) {
                return JsonUtil::getResponse(false, "Image is required !", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            $categories = $request->get('categories') ?? '';

            if ($categories != null) {
                $catName = implode(",", array_unique($categories));
            } else {
                return JsonUtil::getResponse(false, "Select Categories", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }
            // Title
            if (empty($title) || $title == "") {
                return JsonUtil::getResponse(false, "Title is required!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            } elseif ($this->blog->isBlogTileAvailable($title)) {
                if (!$this->blog->isTitleAndBlogIdMatched($blogId, $title)) {
                    if ($title != $currentSlug) {
                        return JsonUtil::getResponse(false, "Title is already available .Please change the Title !", JsonUtil::$_UNPROCESSABLE_ENTITY);
                    }
                }
            }

            // Slug
            if (empty($slug)) {
                return JsonUtil::getResponse(false, "Slug is required !", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }


            // Description
            if (empty($description)) {
                return JsonUtil::getResponse(false, "Description is required !", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }


            // Meta Description
            if (empty($metaDescription)) {
                return JsonUtil::getResponse(false, "Meta Description is required !", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            // Meta Keywords
            if (empty($metaKeywords)) {
                return JsonUtil::getResponse(false, "Meta Keywords is required !", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            // Image
            if ($image == null || empty($image)) {
                $imageName =  $previmg;

                // $errorMsg['imgErr'] = "Featured image is required";
            } else {
                $ext = $image->getClientOriginalExtension();

                $imageSize = getimagesize($image);
                // $width = $imageSize[0];
                // $height = $imageSize[1];

                if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg' && $ext != 'webp' && $ext != 'svg') {
                    return JsonUtil::getResponse(false, "Supported file formats are - png, jpg, jpeg!", JsonUtil::$_UNPROCESSABLE_ENTITY);
                } elseif ($image->getSize() > (1024 * 1024 * 4)) {
                    return JsonUtil::getResponse(false, "Maximum supported file size is 4 MB!", JsonUtil::$_UNPROCESSABLE_ENTITY);
                }
                $blogData = $this->blog->getSingleBlog($blogId);
                $blogImage = $blogData->image;

                if (File::exists(base_path("assets/uploads/blog-img/" . '/' . $blogImage))) {
                    File::delete(base_path("assets/uploads/blog-img/" . '/' . $blogImage));
                }
                // Upload Profile Img
                // DB::beginTransaction();
                $imageName = 'blog_' . '_' . time() . '.' . $image->getClientOriginalExtension();

                try {
                    $upload = $image->storeAs('/blog-img', $imageName);
                    // if (!$upload) {
                    //     return JsonUtil::serverError();
                    // }
                } catch (Exception $e) {
                    // return $e->getMessage();
                    return JsonUtil::serverError();
                }
            }

            // Status
            if (empty($status)) {
                return JsonUtil::getResponse(false, "Please select status !", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            DB::beginTransaction();
            try {

                $blogData = [
                    'is_published' => $status,
                    'title' => $title,
                    'slug' => $slug,
                    'image' => $imageName,
                    'cat_names' => $catName,
                    'description' => $description,
                    'author' => $author,
                    'meta_description' => $metaDescription,
                    'meta_keywords' => $metaKeywords,
                    'meta_url' => $metaogurl,
                    'updated_at' => date('Y-m-d H:i:s')
                ];
                $this->blog->updateBlog($blogId, $blogData);

                DB::commit();
                return JsonUtil::getResponse(true, "Blog Updated successfully", JsonUtil::$_STATUS_OK);
            } catch (Exception $e) {
                DB::rollBack();
                // return JsonUtil::getResponse(false, $e->getMessage(), 500);
                return JsonUtil::serverError();
            }
        } else {
            return JsonUtil::getResponse(false, "Something went wrong...", JsonUtil::$_STATUS_OK);
        }
    }

    public function allBlog()
    {
        if (HttpMethodUtil::isMethodGet()) {
            $allBlog = $this->blog->getBlogList();
            $sn = ($allBlog->currentPage() - 1) * $allBlog->perPage();
            return view('admin.blog.all-blog')->with([
                'page' => 'all-blog',
                'sn' => $sn,
                'allblog' => $allBlog,
            ]);
        }
    }

    public function deleteBlog(Request $request)
    {
        if (HttpMethodUtil::isMethodPost()) {
            $blogId = $request->get('blog_id') ?? '';
            // dd($blogId);
            if (!$this->blog->isBlogIdValid($blogId)) {
                return JsonUtil::getResponse(false, "Invalid ID...", JsonUtil::$_BAD_REQUEST);
            }
            $blogData = $this->blog->getSingleBlog($blogId);
            $blogImage = $blogData->image;
            // dd(File::exists(base_path("assets/uploads/blog/" . '/' . $blogImage)));
            try {
                if (File::exists(base_path("assets/uploads/blog-img/" . '/' . $blogImage))) {
                    File::delete(base_path("assets/uploads/blog-img/" . '/' . $blogImage));
                } else {
                    return JsonUtil::serverError();
                }
                $this->blog->deleteBlog($blogId);
                return JsonUtil::getResponse(true, "Blog Deleted Successfully", JsonUtil::$_STATUS_OK);
            } catch (Exception $e) {
                // return JsonUtil::getResponse(false, $e->getMessage(), JsonUtil::$_BAD_REQUEST);
                return JsonUtil::serverError();
            }
        } else {
            return JsonUtil::getResponse(false, "Something went wrong...", JsonUtil::$_STATUS_OK);
        }
    }
}
