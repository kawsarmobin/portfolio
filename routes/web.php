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

// Route::get('/', function () {
//     return view('welcome');
// });

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => 'auth'],function (){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('change-password', 'Admin\Profile\AccountController@edit')->name('change-password.edit');
});



Route::group(['prefix'=>'admin', 'middleware' => ['auth','admin']],function(){

    Route::resource('user', 'Admin\User\UsersController');

    Route::get('users/active/{id}', 'Admin\User\UsersController@active')->name('user.active');

    Route::get('users/deactive/{id}', 'Admin\User\UsersController@deactive')->name('user.deactive');

    Route::get('users/regular/{id}', 'Admin\User\UsersController@regular')->name('user.regular');

    Route::get('users/admin/{id}', 'Admin\User\UsersController@admin')->name('user.admin');

    Route::resource('category', 'Admin\Category\CategoriesController');

    Route::resource('project', 'Admin\Project\ProjectsController');

    Route::get('projects/publish/{id}', 'Admin\Project\ProjectsController@publish')->name('project.publish');

    Route::get('projects/unpublish/{id}', 'Admin\Project\ProjectsController@unpublish')->name('project.unpublish');

    Route::post('change-password', 'Admin\Profile\AccountController@update')->name('change-password.update');

    Route::get('project-image/{id}', 'Admin\Project\ImagesController@index')->name('project-image.index');

    Route::get('project-image/create/{id}', 'Admin\Project\ImagesController@create')->name('project-image.create');

    Route::post('project-image', 'Admin\Project\ImagesController@store')->name('project-image.store');

    Route::get('project-image/delete/{id}', 'Admin\Project\ImagesController@destroy')->name('project-image.delete');

});

    // FrontEnd ...

    Route::get('/', 'FrontEndController@index')->name('index');
    Route::resource('message', 'MessagesController');
