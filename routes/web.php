<?php

use Illuminate\Support\Facades\Route;


// USer Routes

Route::group(['namespace' => 'User'], function () {
    Route::get('/', 'HomeController@index');

    Route::get('post/{post}', 'PostController@post')->name('post');
    Route::get('post/tag/{tag}', 'HomeController@tag')->name('tag');
    Route::get('post/category/{category}', 'HomeController@category')->name('category');

});

//Route::post('admin/post', 'PostController@store')->name('post.store');
Route::group(['namespace' => 'Admin'], function () {

    Route::get('admin/home', 'AdminController@index')->name('admin.home');
    //User Routes
    Route::resource('admin/user', 'UserController');

    //Post Routes
    Route::resource('admin/post', 'PostController');
    //Tag Routes
    Route::resource('admin/tag', 'TagController');
    //Category Routes
    Route::resource('admin/category', 'CategoryController');
});



//Route::get('/', function () {
//    return view('welcome');
//});
