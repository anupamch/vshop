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

Route::group(["middleware"=>['guest']],function(){
	Route::get("/",function(){
		return redirect('/admin');
	});
   Route::get("/admin","AdminHome@login");
   Route::post('/authenticate',"AdminHome@setAuthenticate" );
   Route::get('/login',"AdminHome@login" );

});
Route::group(['prefix' => 'admin','middleware'=>['admin']],function(){

Route::get('/dashboard',"AdminHome@dashboard" )->name('dashboard');
Route::get('/category',"AdminCategoryController@categoryList" )->name('category');
Route::get('/addCategory',"AdminCategoryController@addCategory" )->name('category-addCategory');
Route::post('/saveCategory',"AdminCategoryController@saveCategory" );
Route::get('/editCategory/{cid}',"AdminCategoryController@editCategory" )->name('category-editCategory');
Route::post('/updateCategory',"AdminCategoryController@updateCategory" );
});