<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class Blog extends Model
{
    use HasFactory;

    protected $blog = "blog";
    protected $categories = "categories";

    /*
    -----------------------------------
    CHECK
    -----------------------------------
    */
    public function isBlogIdValid($id)
    {
        return DB::table($this->blog)->where('blog_id', $id)->count() > 0;
    }

    public function isCategoryIdValid($id)
    {
        return DB::table($this->categories)->where('cat_id', $id)->count() > 0;
    }

    public function isSlugAvailable(string $slug)
    {
        return DB::table($this->blog)->where('slug', $slug)->count() > 0;
    }

    public function isCatSlugAvailable(string $slug)
    {
        return DB::table($this->categories)->where('cat_slug', $slug)->count() > 0;
    }


    public function isBlogTileAvailable(string $title)
    {
        return DB::table($this->blog)->where('title', $title)->count() > 0;
    }

    public function isTitleAndBlogIdMatched($blogId, string $title)
    {
        return DB::table($this->blog)->where([['blog_id', $blogId], ['title', $title]])->count() > 0;
    }

    public function isSlugAndCatIdMatched($catId, string $slug)
    {
        return DB::table($this->categories)->where([['cat_id', $catId], ['cat_slug', $slug]])->count() > 0;
    }

    public function getBlogById($blogId)
    {
        return DB::table($this->blog)->where('blog_id', $blogId)->first();
    }

    public function getCatById($catId)
    {
        return DB::table($this->categories)->where('cat_id', $catId)->first();
    }
    /*
    -----------------------------------
    INSERT
    -----------------------------------
    */

    public function addBlog(array $values)
    {
        return DB::table($this->blog)->insert($values);
    }

    public function addCategory(array $values)
    {
        return DB::table($this->categories)->insert($values);
    }

    /*
    -----------------------------------
    READ
    -----------------------------------
    */
    public function getSingleBlog($id)
    {
        return DB::table($this->blog)->where('blog_id', $id)->first();
    }

    public function getSingleCategory($id)
    {
        return DB::table($this->categories)->where('cat_id', $id)->first();
    }


    public function getBlogList($perPage = 4)
    {
        return DB::table($this->blog)
            ->orderByDesc('blog_id')
            ->paginate($perPage);
    }

    public function totalBlogCount()
    {
        return DB::table($this->blog)
            ->count();
    }

    public function totalCategoryCount()
    {
        return DB::table($this->categories)
        ->count();
    }

    public function todayBlogPostCount()
    {
        return DB::table($this->blog)
            ->whereDate('created_at', Carbon::today())
            ->count();
    }

    public function blogBySlug($slug)
    {
        return DB::table($this->blog)->where('slug', $slug)->first();
    }

    public function allBlogCategory($perPage = 10)
    {
        return DB::table($this->categories)
            ->orderByDesc('cat_id')
            ->paginate($perPage);
    }

    public function getAllBlogCat()
    {
        return db::table($this->categories)
            ->get();
    }

    public function getSearchData($searchCat, $perPage = 10,)
    {
        return DB::table($this->blog)
            ->where('cat_names', 'like', "%{$searchCat}%")
            ->paginate($perPage);
    }

    public function singlecategory($cat)
    {
        return DB::table($this->blog)->where('cat_names', $cat)->first();
    }

    public function blogNotFound($cat)
    {
        return DB::table($this->blog)->where('cat_names', $cat)->count();
    }

    public function getAllCattegory()
    {
        return db::table($this->categories)
            ->get();
    }


    /*
    -----------------------------------
    UPDATE
    -----------------------------------
    */

    public function updateBlog(int $blogId, array $val)
    {
        return DB::table($this->blog)->where('blog_id', $blogId)->update($val);
    }


    public function updateCategory(int $catId, array $val)
    {
        return DB::table($this->categories)->where('cat_id', $catId)->update($val);
    }
    /*
    -----------------------------------
    DELETE
    -----------------------------------
    */

    public function deleteBlog($id)
    {
        return DB::table($this->blog)->where('blog_id', $id)->delete();
    }

    public function deleteCategory($id)
    {
        return DB::table($this->categories)->where('cat_id', $id)->delete();
    }
}
