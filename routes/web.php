<?php

use Illuminate\Support\Facades\Route;


// UserAccount
Route::group(['namespace' => 'UserAccount'], function () {

    //Login
    Route::get('/logout', 'SignInController@logout')->name('logout');
    Route::get('/signin', 'SignInController@index')->name('signin.index');
    Route::post('/signin', 'SignInController@signIn')->name('sigin');
    Route::get('/register', "RegisterController@show")->name("register.show");
    Route::post('/register', "RegisterController@register")->name("register");
    //Post Routes
    Route::resource('admin/post', 'PostController');


    Route::middleware('checkLogin')->group(function () {
        Route::prefix('user')->group(function () {

            //Controller Post of UserAcount
            Route::get('/{id}/delete', 'UsersAccountController@delete')->name('admin.User.delete');
            Route::get('post/show', 'UsersAccountController@showUserAll')->name('PostAll');
            Route::get('/post/private', 'UsersAccountController@showUserPrivate')->name('PostPrivate');
            Route::get('/post/public', 'UsersAccountController@showUserPublic')->name('PostPublic');
            Route::get('/post/create', 'UsersAccountController@PostCreate')->name('UserPost');
            Route::get('/post/{id}/edit', 'UsersAccountController@PostEdit')->name('PostEdit');


            //Controller Profile Edit
            Route::get('/profile/edit', 'UsersAccountController@ProfileEdit')->name('user.porfile.edit');
            Route::post('/profile/update', 'UsersAccountController@ProfileUpdate')->name('user.profile.update');

        });
    });

});


//User
Route::group(['namespace' => 'User'], function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('post/{post}', 'PostController@post')->name('post');
    Route::get('post/tag/{slug}', 'HomeController@tag')->name('tag');
    Route::get('post/category/{category}', 'HomeController@category')->name('category');
    Route::get('userdetail/{id}', 'PostController@showUserDetail')->name('user.detail');
});


//Admin
Route::middleware('checkLogin')->group(function () {
    Route::group(['namespace' => 'Admin'], function () {

        Route::get('admin/home', 'AdminController@index')->name('admin.home');
        //User Routes
        Route::resource('admin/user', 'UserController');

        //Tag Routes
        Route::resource('admin/tag', 'TagController');
        //Category Routes
        Route::resource('admin/category', 'CategoryController');
    });
});
