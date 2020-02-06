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


Route::get('/', 'MainController@index');

// 사용자 가입

Route::get('auth/register', [
    'as' => 'users.create',
    'uses' => 'UsersController@create',
]);

Route::post('auth/register', [
    'as' => 'users.store',
    'uses' => 'UsersController@store',
]);

// Route::get('auth/confirm', [
//     'as' => 'users.confirm',
//     'uses' => 'UsersController@confirm',
// ]);


// 사용자 인증

Route::get('auth/login', [
    'as' => 'sessions.create',
    'uses' => 'SessionsController@create',
]);

Route::post('auth/login', [
    'as' => 'sessions.store',
    'uses' => 'SessionsController@store',
]);

Route::get('auth/logout', [
    'as' => 'sessions.destroy',
    'uses' => 'SessionsController@destroy',
]);


// 사용자 정보 수정

Route::get('auth/change', [
    'as' => 'informations.index',
    'uses' => 'InformationsController@index',
]);

Route::post('auth/change', [
    'as' => 'informations.update',
    'uses' => 'InformationsController@update',
]);


// 비밀 번호 초기화

// Route::get('auth/remind', [
//     'as' => 'remind.create',
//     'uses' => 'PasswordsController@create',
// ]);

// Route::post('auth/remind', [
//     'as' => 'remind.store',
//     'uses' => 'PasswordsController@store',
// ]);

// Route::get('auth/reset/{token}', [
//     'as' => 'reset.create',
//     'uses' => 'PasswordsController@getReset',
// ]);

// Route::post('auth/reset', [
//     'as' => 'reset.store',
//     'uses' => 'PasswordsController@postReset',
// ]);

// 회원 정보 수정 or 판매자 신청
