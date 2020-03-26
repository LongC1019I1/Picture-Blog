<?php

use Illuminate\Support\Facades\Route;



Route::get('/logout', 'SignInController@logout')->name('logout');
Route::get('/signin', 'SignInController@index')->name('signin.index');
Route::post('/signin', 'SignInController@signIn')->name('sigin');


Route::prefix('user')->group(function () {
    Route::get('/list', 'UsersController@index')->name('admin.User.index');
    Route::get('/create', 'UsersController@showFormCreate')->name('admin.User.create');
    Route::post('/store', 'UsersController@store')->name('admin.user.store');
//    Route::get('/{id}/edit', 'UserController@showFormEdit')->name('admin_html.user.edit');
//    Route::post('/{id}/update', 'UserController@update')->name('admin_html.user.update');
    Route::get('/{id}/delete', 'UsersController@delete')->name('admin.User.delete');
//    Route::get('/search', 'UserController@search')->name('admin_html.user.search');
});

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
