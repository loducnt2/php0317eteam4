<?php

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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');*/

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::get('account/detail/{id}', 'UserController@show');      /*----------------Chưa--------------*/

Route::get('cart', 'CartController@index');
Route::get('cart/add/{id}', 'CartController@store');
Route::get('cart/remove/{id}', 'CartController@destroy');
Route::get('cart/checkout', 'CartController@checkout');
Route::post('cart/checkout', 'CartController@save');

Route::get('product/detail/{id}', 'ProductController@show');
Route::get('category/{id}', 'ProductController@category');
Route::get('discount', 'ProductController@khuyenmai');
Route::get('banchay', 'ProductController@banchay');
Route::get('product', 'ProductController@index');   /*--------Tìm kiếm----------*/
Route::get('all', 'ProductController@all');

Route::resource('contact', 'ContactController');
Route::get('introduce', 'ContactController@gioithieu');
Route::get('blog', 'ContactController@blog');                           /* chưa content*/



/*Route::get('supplier/detail/{id}', 'ProductController@showsup');*/


Route::group(['middleware'  => ['auth']], function (){

    Route::group(['middleware'  => ['ckAdmin']], function (){

        Route::get('admin', 'Admin\DashboardController@index');
        Route::resource('admin/category', 'Admin\CategoryController');
        Route::resource('admin/product', 'Admin\ProductController');
        Route::resource('admin/user', 'Admin\UserController');

        Route::resource('admin/orderdetail', 'Admin\OrderdetailController');
        Route::resource('admin/order', 'Admin\OrderController');
        Route::resource('admin/supplier', 'Admin\SupplierController');
        Route::resource('admin/image', 'Admin\ImageController');
        Route::resource('admin/warrantydetail', 'Admin\WarrantydetailController');
        Route::resource('admin/warranty', 'Admin\WarrantyController');

        Route::resource('admin/comment', 'Admin\CommentController');

    });
});

