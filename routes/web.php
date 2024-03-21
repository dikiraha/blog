<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Website\BlogController;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PortalController;
use App\Http\Controllers\Admin\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['namespace' => 'Website', 'as' => 'website.'], function () {
    Route::get('/', [BlogController::class, 'home'])->name('home');
    Route::get('/profile', [BlogController::class, 'profile'])->name('profile');
    Route::get('/portal', [BlogController::class, 'portal'])->name('portal');
    Route::get('/portal/article/{uuid}', [BlogController::class, 'portal_article_list'])->name('portal_article_list');
});

Route::group(['namespace' => 'Admin', 'as' => 'admin.', 'prefix' => 'admin'], function () {
    Route::get('login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');

    Route::middleware('auth')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');

        Route::group(['prefix' => 'portal'], function(){
            Route::get('/create', [PortalController::class, 'create'])->name('portal.create');
            Route::post('/store', [PortalController::class, 'store'])->name('portal.store');
            Route::get('/edit/{id}', [PortalController::class, 'edit'])->name('portal.edit');
            Route::post('/update/{id}', [PortalController::class, 'update'])->name('portal.update');
            Route::post('/destroy', [PortalController::class, 'destroy'])->name('portal.destroy');
            Route::get('/list', [PortalController::class, 'list'])->name('portal.list');
            Route::get('/list_ajax', [PortalController::class, 'list_ajax'])->name('portal.list_ajax');

            Route::group(['prefix' => 'article'], function(){
                Route::get('/create/{id}', [ArticleController::class, 'create'])->name('article.create');
                Route::post('/store/{id}', [ArticleController::class, 'store'])->name('article.store');
                Route::get('/edit/{id}', [ArticleController::class, 'edit'])->name('article.edit');
                Route::post('/update/{id}', [ArticleController::class, 'update'])->name('article.update');
                Route::post('/destroy', [ArticleController::class, 'destroy'])->name('article.destroy');
                Route::get('/list', [ArticleController::class, 'list'])->name('article.list');
                Route::get('/list_ajax/{id}', [ArticleController::class, 'list_ajax'])->name('article.list_ajax');
            });
        });

        Route::group(['prefix' => 'user'], function(){
            // Route::get('/edit_profile', 'UserController@edit_profile')->name('user.edit_profile');
            // Route::put('/update_profile', 'UserController@update_profile')->name('user.update_profile');

            Route::get('/create', [UserController::class, 'create'])->name('user.create');
            Route::post('/store', [UserController::class, 'store'])->name('user.store');
            Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
            Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
            Route::post('/destroy', [UserController::class, 'destroy'])->name('user.destroy');
            Route::get('/list', [UserController::class, 'list'])->name('user.list');
            Route::get('/list_ajax', [UserController::class, 'list_ajax'])->name('user.list_ajax');
        });
    });
});
