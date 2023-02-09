<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\RatingController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name("cart.index");
Route::get('/cart/delete', 'App\Http\Controllers\CartController@delete')->name("cart.delete");
Route::post('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name("cart.add");

Route::middleware('auth')->group(function () {
    Route::get('/cart/purchase', 'App\Http\Controllers\CartController@purchase')->name("cart.purchase");
    Route::get('/my-account/orders', 'App\Http\Controllers\MyAccountController@orders')->name("myaccount.orders");
    Route::post('add-rating', [RatingController::class, 'add']);

});

Route::middleware('admin')->group(function () {
    Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
    Route::get('/admin/products', 'App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.index");
    Route::post('/admin/products/store', 'App\Http\Controllers\Admin\AdminProductController@store')->name("admin.product.store");
    Route::delete('/admin/products/{id}/delete', 'App\Http\Controllers\Admin\AdminProductController@delete')->name("admin.product.delete");
    Route::get('/admin/products/{id}/edit', 'App\Http\Controllers\Admin\AdminProductController@edit')->name("admin.product.edit");
    Route::put('/admin/products/{id}/update', 'App\Http\Controllers\Admin\AdminProductController@update')->name("admin.product.update");
    Route::get('/admin/users', 'App\Http\Controllers\Admin\AdminUserController@index')->name("admin.users.index");
    Route::get('/admin/users/{id}/edit', 'App\Http\Controllers\Admin\AdminUserController@edit')->name("admin.users.edit");
    Route::put('/admin/users/{id}/update', 'App\Http\Controllers\Admin\AdminUserController@update')->name("admin.users.update");
    Route::delete('/admin/users/{id}/delete', 'App\Http\Controllers\Admin\AdminUserController@delete')->name("admin.users.delete");
    Route::get('/admin/comentarios', 'App\Http\Controllers\Admin\AdminCommentController@index')->name("admin.comments.index");
    Route::delete('/admin/comentarios/{id}/delete', 'App\Http\Controllers\Admin\AdminCommentController@delete')->name("admin.comments.delete");
    Route::get('/admin/comentarios/{id}/edit', 'App\Http\Controllers\Admin\AdminCommentController@edit')->name("admin.comments.edit");
    Route::put('/admin/comentarios/{id}/update', 'App\Http\Controllers\Admin\AdminCommentController@update')->name("admin.comments.update");
    Route::get('/admin/pedidos', 'App\Http\Controllers\Admin\AdminPedidosController@index')->name("admin.pedidos.index");
    Route::post('/admin/pedidos/store', 'App\Http\Controllers\Admin\AdminPedidosController@store')->name("admin.pedidos.store");
    Route::delete('/admin/pedidos/{id}/delete', 'App\Http\Controllers\Admin\AdminPedidosController@delete')->name("admin.pedidos.delete");
    Route::get('/admin/pedidos/{id}/edit', 'App\Http\Controllers\Admin\AdminPedidosController@edit')->name("admin.pedidos.edit");
    Route::put('/admin/pedidos/{id}/update', 'App\Http\Controllers\Admin\AdminPedidosController@update')->name("admin.pedidos.update");
    Route::get('/admin/rating', 'App\Http\Controllers\Admin\AdminRatingController@index')->name("admin.rating.index");
    Route::delete('/admin/rating/{id}/delete', 'App\Http\Controllers\Admin\AdminRatingController@delete')->name("admin.rating.delete");
    Route::get('/admin/rating/{id}/edit', 'App\Http\Controllers\Admin\AdminRatingController@edit')->name("admin.rating.edit");
    Route::put('/admin/rating/{id}/update', 'App\Http\Controllers\Admin\AdminRatingController@update')->name("admin.rating.update");

});

Auth::routes();
