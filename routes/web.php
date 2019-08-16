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

Route::get('/', "Controller@login");

Route::get('/login', "Controller@login");

Route::post('/login/action', "Controller@loginAction");
Route::get('/login/action', "Controller@login");

Route::group(['middleware' => 'checkuser'], function (){


    Route::get('/index', "Controller@index");


    Route::get('admin/profile', 'AdminController@adminProfile');

    Route::post('/admin/add', "AdminController@add");
    Route::get('/admin/add', "AdminController@allAdmin");
    Route::post('/admin/edit', "AdminController@edit");
    Route::get('/admin/edit', "AdminController@allAdmin");
    Route::post('/admin/delete', "AdminController@delete");
    Route::get('/admin/delete', "AdminController@allAdmin");

    Route::post('/admin/updateProfile', "AdminController@updateProfile");
    Route::get('/admin/updateProfile', "AdminController@adminProfile");

    Route::get('admin/changepassword', 'AdminController@changePassword');
    Route::post('/admin/updatePassword', "AdminController@updatePassword");
    Route::get('/admin/updatePassword', "AdminController@changePassword");

    Route::get('admin/settings', 'AdminController@settings');
    Route::post('admin/sequence/update', "AdminController@updateSequence");
    Route::get('admin/sequence/update', "AdminController@settings");

    Route::post('admin/bankinfo/update', "AdminController@updateBankInfo");
    Route::get('admin/bankinfo/update', "AdminController@settings");

    Route::get('admin/list', 'AdminController@allAdmin');

    Route::get('user/list', 'Controller@userList');

    Route::get('doctor/list', 'Controller@doctorList');

});
