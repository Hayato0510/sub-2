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
// LP獲得用
Route::get('app', function () {
    return view('yt.check'); //LP確認用
    // return view('yt.adult'); //Android獲得用
});

//OS識別→案件遷移
Route::get('os', 'AdController@os');

// LP確認用
Route::get('cccheck', function () {
    return view('yt.adult'); //Android獲得用
});
