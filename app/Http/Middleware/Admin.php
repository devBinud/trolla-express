<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Utils\HttpMethodUtil;
use App\Utils\JsonUtil;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $adminId = $request->session()->get('admin_id', '');
        if ($adminId == '' || $adminId == null) {
            if (HttpMethodUtil::isMethodGet()) {
                return redirect('admin');
            } else {
                return JsonUtil::accessDenied();
            }
        }
        return $next($request);
    }
}
