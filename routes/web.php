<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::prefix('/admin')->namespace('Admin')->group(function(){
//all the admin route define here:-
    Route::match(['get', 'post'], '/', [AdminController::class, 'login']);
    Route::group(['middleware'=>['admin']], function(){
        Route::get('/dashboard', [AdminController::class, 'dashboard']);
        Route::get('/logout', [AdminController::class, 'logout']);
        Route::get('/adminlist', [AdminController::class, 'adminlist']);

        //sections
        Route::get('/sections', [SectionController::class, 'sections']);
        Route::post('/update-section-status', [SectionController::class, 'UpdateSectionStatus']);

        //categories
        Route::get('/categories', [CategoryController::class, 'categories']);

        //subcategories
        Route::get('/subcategories', [SubcategoryController::class, 'subcategories']);

        //Products
        Route::get('/products', [ProductController::class, 'Products']);

        //brand
        Route::get('/brands', [ProductController::class, 'brands']);
        
    });
});
