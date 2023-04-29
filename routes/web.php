<?php

use Illuminate\Support\Facades\Route;
use App\Utils\SlugGenerator;
use Illuminate\Http\Request;

// ADMIN
use App\Http\Controllers\admin\AdmCtlr;
use App\Http\Controllers\admin\BlogCtlr;

// FRONT
use App\Http\Controllers\public\PublicCtlr;


//=============================================================

Route::view('app-download','public.app-download') ;

// Front
Route::any('page', [PublicCtlr::class, 'index']);
Route::any('blog-details/{slug}',[PublicCtlr::class, 'blogDetails']);
Route::any('/',[PublicCtlr::class, 'home']);
Route::any('send-mail',[PublicCtlr::class, 'sendMail']);
Route::view('terms-and-conditions','public.terms-conditions') ;
Route::view('loader','public.loader');
Route::view('privacy-policy','public.privacy-policy') ;
Route::view('refunds-and-cancellation-policy','public.refunds-and-cancellation-policy') ;

//=============================================================
// ADmin
Route::any('admin', [AdmCtlr::class, 'login']);
Route::group(['middleware' => 'admin_auth'], function () {
    Route::any('admin/dashboard', [AdmCtlr::class, 'dashboard']);
    Route::any('logout', [AdmCtlr::class, 'logout']);
    Route::any('blog', [BlogCtlr::class, 'index']);
});

// SLUG GENERATE
Route::get('generate-slug', function (Request $request) {
    $data = $request->get('data') ?? '';
    return SlugGenerator::generateSlug($data);
});
