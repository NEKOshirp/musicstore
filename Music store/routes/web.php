<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegistration;
use App\Http\Controllers\UploadFileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;





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

Route::get('/foo/bar','UriController@index');

Route::get('/register',function() {
    return view('register'); 
    });
    Route::post('/user/register',[UserRegistration::class,'postRegister']);

    

Route::get('uploadfile', [UploadFileController::class, 'index'])->name('uploadfile');
Route::post('uploadfile', [UploadFileController::class, 'showUploadFile']);
Route::get('category', function(){
     Schema::create('category', function($table)
     { $table->increments('id');
     $table-> string('name'); }); 
     echo "Đã tạo bảng category thành công"; });

     Route::get('themcot', function(){ Schema::table('category', function($table)
        { $table ->string('category_description',200); });
         echo"Đã thêm cột category_description"; });

     Route::get('product', function(){ Schema::create('product', function($table)
            { $table ->increments('product_id');
             $table->string('product_name'); $table ->float('product_price');
             $table ->integer('quantity'); $table ->string('product_description'); }); });

             Route::get('themcotcategoryid', function(){ Schema::table('product', function($table){ $table->integer('category_id')->unsigned();
                 $table ->foreign('category_id')->references('category_id')->on('category'); });
                  echo"Đã thêm cột category_id"; });


    Route::get('/product/index', [ProductController::class,'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
    Route::get('/product/delete/{id}', [ProductController::class,'destroy'])->name('product.destroy');
    Route::get('/product/edit/{id}', [ProductController::class,'edit'])->name('product.edit');
    Route::POST('/product/update/{id}', [ProductController::class,'update'])->name('product.update');
    Route::get('/product/show/{id}', [ProductController::class,'show'])->name('product.show');
    Route::POST('/product/store', [ProductController::class,'store'])->name('product.store');
    Route::get('search', [ProductController::class,'searchMusic']);
    
    

    Route::get('/category/index', [CategoryController::class,'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class,'create'])->name('category.create');
    Route::get('/category/delete/{id}', [CategoryController::class,'destroy'])->name('category.destroy');
    Route::get('/category/edit/{id}', [CategoryController::class,'edit'])->name('category.edit');
    Route::POST('/category/update/{id}', [CategoryController::class,'update'])->name('category.update');
    Route::get('/category/show/{id}', [CategoryController::class,'show'])->name('category.show');
    Route::POST('/category/store', [CategoryController::class,'store'])->name('category.store');



    

    
    
    
    
    Route::group(['namespace' => 'App\Http\Controllers'], function()
    {   
        /**
         * Home Routes
         */
        Route::get('/', 'HomeController@index')->name('home.index');
    
        Route::group(['middleware' => ['guest']], function() {
            /**
             * Register Routes
             */
            Route::get('/register', 'RegisterController@show')->name('register.show');
            Route::post('/register', 'RegisterController@register')->name('register.perform');
    
            /**
             * Login Routes
             */
            Route::get('/login', 'LoginController@show')->name('login.show');
            Route::post('/login', 'LoginController@login')->name('login.perform');
    
        });
    
        Route::group(['middleware' => ['auth']], function() {
            /**
             * Logout Routes
             */
            Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        });
    });
    
