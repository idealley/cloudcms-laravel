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




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

// We will need the proxy for the images and to download elements

Route::group(['middleware' => ['web']], function () {

    Route::get('test', '\Idealley\Cloudcms\ProxyController@index');
    Route::get('test/{slug}', '\Idealley\Cloudcms\ProxyController@show');

});
