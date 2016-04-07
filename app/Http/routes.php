<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Blog pages
get('/', function () {
    return redirect('/blog');
});

get('blog', 'BlogController@index');
get('blog/{id}', 'BlogController@showPost');

$router->get('contact', 'ContactController@showForm');
Route::post('contact', 'ContactController@sendContactInfo');

get('rss', 'BlogController@rss');

get('sitemap.xml', 'BlogController@siteMap');

// Admin area
get('admin', function () {
    return redirect('/admin/post');
});
$router->group(['namespace' => 'Admin', 'middleware' => 'auth'], function () {
    resource('admin/post', 'PostController', ['except' => 'show']);
    resource('admin/tag', 'TagController', ['except' => 'show']);
    get('admin/upload', 'UploadController@index');
    // 添加如下路由
    post('admin/upload/file', 'UploadController@uploadFile');
    delete('admin/upload/file', 'UploadController@deleteFile');
    post('admin/upload/folder', 'UploadController@createFolder');
    delete('admin/upload/folder', 'UploadController@deleteFolder');
});

// Logging in and out
get('/auth/login', 'Auth\AuthController@getLogin');
post('/auth/login', 'Auth\AuthController@postLogin');
get('/auth/logout', 'Auth\AuthController@getLogout');//2016-01-01
//2016-01-02
//2016-01-03
//2016-01-04
//2016-01-05
//2016-01-06
//2016-01-07
//2016-01-08
//2016-01-09
//2016-01-10
//2016-01-11
//2016-01-12
//2016-01-13
//2016-01-14
//2016-01-15
//2016-01-16
//2016-01-17
//2016-01-18
//2016-01-19
//2016-01-20
//2016-01-21
//2016-01-22
//2016-01-23
//2016-01-24
//2016-01-25
//2016-01-26
//2016-01-27
//2016-01-28
//2016-01-29
//2016-01-30
//2016-01-31
//2016-02-01
//2016-02-02
//2016-02-03
//2016-02-04
//2016-02-05
//2016-02-06
//2016-02-07
//2016-02-08
//2016-02-09
//2016-02-10
//2016-02-11
//2016-02-12
//2016-02-13
//2016-02-14
//2016-02-15
//2016-02-16
//2016-02-17
//2016-02-18
//2016-02-19
//2016-02-20
//2016-02-21
//2016-02-22
//2016-02-23
//2016-02-24
//2016-02-25
//2016-02-26
//2016-02-27
//2016-02-28
//2016-02-29
//2016-03-01
//2016-03-02
//2016-03-03
//2016-03-04
//2016-03-05
//2016-03-06
//2016-03-07
//2016-03-08
//2016-03-09
//2016-03-10
//2016-03-11
//2016-03-12
//2016-03-13
//2016-03-14
//2016-03-15
//2016-03-16
//2016-03-17
//2016-03-18
//2016-03-19
//2016-03-20
//2016-03-21
//2016-03-22
//2016-03-23
//2016-03-24
//2016-03-25
//2016-03-26
//2016-03-27
//2016-03-28
//2016-03-29
//2016-03-30
//2016-03-31
//2016-04-01
//2016-04-02
//2016-04-03
//2016-04-04
//2016-04-05
//2016-04-06
//2016-04-07
