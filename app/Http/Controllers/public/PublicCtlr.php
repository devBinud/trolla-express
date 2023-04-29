<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Utils\HttpMethodUtil;
use App\Utils\JsonUtil;
use Exception;
use Illuminate\Support\Facades\DB;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class PublicCtlr extends Controller
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
            case 'about':
                return $this->about($request);
                break;
            case 'services':
                return $this->services($request);
                break;
            case 'blog':
                return $this->blog($request);
                break;
            case 'search-category':
                return $this->searchCategory($request);
                break;
            case 'contact':
                return $this->contact($request);
                break;
            case 'feedback':
                return $this->feedback($request);
                break;
            case 'terms-and-conditions':
                return $this->termscontions($request);
                break;
            case 'privacy-policy':
                return $this->privacypolicy($request);
                break;
            case 'refunds-and-cancellation-policy':
                return $this->refundsandcancellationpolicy($request);
                break;
            case 'transporter':
                return $this->transporter($request);
                break;
            case 'loader':
                return $this->loader($request);
                 break;
            case 'driver':
                return $this->driver($request);
                break;
            default:
                return abort(404);
                break;
        }
    }

    public function home()
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('public.index')->with([]);
        }
    }

    public function about()
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('public.about')->with([
                'page' => 'page',
            ]);
        }
    }

    public function services()
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('public.services')->with([
                'page' => 'page',
            ]);
        }
    }

    public function blog()
    {
        if (HttpMethodUtil::isMethodGet()) {
            $allBlog = $this->blog->getBlogList();
            $sn = ($allBlog->currentPage() - 1) * $allBlog->perPage();
            $allblogcat = $this->blog->getAllBlogCat();
            return view('public.blog')->with([
                'page' => 'page',
                'sn' => $sn,
                'allblog' => $allBlog,
                'allblogcat' => $allblogcat,

            ]);
        }
    }

    public function searchCategory(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            $data = $request->get('catName');
            $searchCatData = $this->blog->getSearchData($data);
            $sn = ($searchCatData->currentPage() - 1) * $searchCatData->perPage();
            $allblogcat = $this->blog->getAllBlogCat();
            $singlecat = $this->blog->singlecategory($data);
            $notfound = $this->blog->blogNotFound($data);
            $allBlog = $this->blog->getBlogList();
            $sn1 = ($allBlog->currentPage() - 1) * $allBlog->perPage();
            return view('public.blog-category')->with([
                'sn' => $sn,
                'sn1' => $sn1,
                'page' => 'page',
                'allblogcat' => $allblogcat,
                'data' => $data,
                'searchCatData' => $searchCatData,
                'singlecat' => $singlecat,
                'notfound' => $notfound,
                'allblog' => $allBlog,
            ]);
        } else {
            return JsonUtil::methodNotAllowed();
        }
    }

    public function contact()
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('public.contact')->with([
                'page' => 'page',

            ]);
        }
    }

    public function sendMail(Request $request)
    {
        if (HttpMethodUtil::isMethodPost()) {

            $email = $request->get('email') ?? '';
            $name = $request->get('name') ?? '';
            $subject = $request->get('subject') ?? '';
            $message = $request->get('message') ?? '';

            // * Validation *
            //Email

            if (empty($email)) {
                return JsonUtil::getResponse(false, "Enter your valid email !", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            // Name
            if (empty($name)) {
                return JsonUtil::getResponse(false, "Name is required !", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            // Subject
            if (empty($subject)) {
                return JsonUtil::getResponse(false, "Subject is required !", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            // Message

            if (empty($message)) {
                return JsonUtil::getResponse(false, "Message is required !", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            DB::beginTransaction();
            try {
                $data = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'subject' => $request->subject,
                    'message' => $request->message,
                ];
                Mail::to('codetest684@gmail.com')->send(new ContactMail($data));
                DB::commit();
                return JsonUtil::getResponse(true, "Your message has been sent successfully!", JsonUtil::$_STATUS_OK);
            } catch (Exception $e) {
                DB::rollback();
                return JsonUtil::getResponse(false, $e->getMessage(), 500);
                return JsonUtil::serverError();
            }
        } else {
            return JsonUtil::methodNotAllowed();
        }
    }

    public function feedback()
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('public.feedback')->with([
                'page' => 'page',
            ]);
        }
    }

    public function termscontions()
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('public.terms-conditions')->with([
                'page' => 'page',
            ]);
        }
    }

    public function privacypolicy()
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('public.privacy-policy')->with([
                'page' => 'page',
            ]);
        }
    }

    public function refundsandcancellationpolicy()
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('public.refunds-and-cancellation-policy')->with([
                'page' => 'page',
            ]);
        }
    }


    public function blogDetails($slug)
    {
        if (HttpMethodUtil::isMethodGet()) {
            $blog = $this->blog->blogBySlug($slug);
            // dd($data);
            if (!$this->blog->isSlugAvailable($slug)) {
                return abort(404);
            }
            $category = $this->blog->allBlogCategory();
            $allblogcat = $this->blog->getAllBlogCat();
            $allBlog = $this->blog->getBlogList(9);
            return view('public.blog_details')->with([
                'blog' => $blog,
                'category' => $category,
                'allblogcat' => $allblogcat,
                'allblog' => $allBlog,
            ]);
        } else {
            return JsonUtil::methodNotAllowed();
        }
    }

    public function transporter(Request $request)
    {
        if(HttpMethodUtil::isMethodGet()){
            return view('public.transporter');
        }
    }
    public function loader(Request $request)
    {
        if(HttpMethodUtil::isMethodGet()){
            return view('public.loader');
        }
    }
    public function driver(Request $request)
    {
        if(HttpMethodUtil::isMethodGet()){
            return view('public.driver');
        }
    }
}
