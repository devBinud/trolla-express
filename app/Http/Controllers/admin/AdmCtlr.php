<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\Blog;
use App\Utils\HttpMethodUtil;
use App\Utils\JsonUtil;
use App\Utils\RegexUtil;
use Exception;

class AdmCtlr extends Controller
{
    private $admin;
    private $blog;

    public function __construct()
    {
        $this->admin = new Admin();
        $this->blog = new Blog();
    }

    public function index(Request $request)
    {
        $action = $request->get('action') ?? '';
        // dd($action);
        switch ($action) {
            case 'admin-dashboard':
                return $this->dashboard($request);
                break;
            default:
                return abort(404);
                break;
        }
    }


    public function login(Request $request)
    {
        if ($request->session()->has('admin_id')) {
            return redirect('admin/dashboard');
        }
        if (HttpMethodUtil::isMethodGet()) {
            return view('admin.login');
        } elseif (HttpMethodUtil::isMethodPost()) {
            $username = $request->get('username') ?? '';
            $password = $request->get('password') ?? '';
            $userData = null;



            DB::beginTransaction();
            try {

                if (!$this->admin->isUserNameValid($username)) {
                    return JsonUtil::accessDenied();
                }

                $userData = $this->admin->getUserDataByUsername($username);

                if ($userData == null) {
                    return JsonUtil::getResponse(false, "Please enter username or password", JsonUtil::$_UNAUTHORIZED);
                }

                if (!password_verify($password, $userData->password)) {
                    return JsonUtil::getResponse(false, "Invalid username or password", JsonUtil::$_UNAUTHORIZED);
                }

                session()->put('admin_id', $userData->admin_id);

                DB::commit();
                return JsonUtil::getResponse(true, "Login successful", JsonUtil::$_STATUS_OK);
            } catch (Exception $e) {
                DB::rollback();
                return JsonUtil::getResponse(false, $e->getMessage(), 500);
                return JsonUtil::serverError();
            }
        } else {
            return JsonUtil::methodNotAllowed();
        }
    }


    public function dashboard()
    {
        if (HttpMethodUtil::isMethodGet()) {

            return view('admin.dashboard')->with([
                'page' => 'dashboard',
                'blogcount' => $this->blog->totalBlogCount(),
                'todayblog' => $this->blog->todayBlogPostCount(),
                'categoryCount' => $this->blog->totalCategoryCount(),
            ]);
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('admin_id');
        return redirect('/admin');
    }
}
