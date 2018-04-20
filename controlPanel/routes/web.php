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
Route::get("/", "AdminController@index")->middleware("UserAuth");

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get("/add-category", "CategoryController@addCategory")->middleware("UserAuth");
Route::post("/save-category", "CategoryController@saveCategory")->middleware("UserAuth");
Route::get("/manage-category", "CategoryController@manageCategory")->middleware("UserAuth");
Route::get("/edit-category/{edit_id}", "CategoryController@editCategory")->middleware("UserAuth");
Route::post("/update-category", "CategoryController@updateCategory")->middleware("UserAuth");
Route::get("/delete-category/{delete_id}", "CategoryController@deleteCategory")->middleware("UserAuth");
Route::get("/add-product", "ProductController@addProduct")->middleware("UserAuth");


Route::group(["middleware"=>"UserAuth"], function(){
	Route::post("/save-product", "ProductController@saveProduct");
	Route::get("/manage-product", "ProductController@manageProduct");
	Route::get("/view-product/{id}", "ProductController@viewProduct");
	Route::get("/edit-product/{id}", "ProductController@editProduct");
	Route::post("/update-product", "ProductController@updateProduct");
	Route::get("/delete-product/{id}", "ProductController@deleteProduct");
});