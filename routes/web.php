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

function getUrl($sub,$controller,$name){Route::get($sub,$controller)->name($name);}
function postUrl($sub,$controller,$name){Route::Post($sub,$controller)->name($name);}

Auth::routes();

getUrl('/','MainController@index','index');

Route::group(['prefix'=>'menu'],function(){
    getUrl('/{id}/detail','MainController@detail','menu-detail');
    
    Route::group(['prefix'=>'exp'],function(){
        getUrl('/makanans','MainController@makanans','exp-makanans');
        getUrl('/minumans','MainController@minumans','exp-minumans');
    });

    postUrl('/pesan{id_menu}','PesananController@pesan','pesan');
    getUrl('/pesanan{pesanans}','PesananController@pesanan','pesanan');
});

Route::group(['prefix'=>'admin/v1','middleware'=>'auth'],function(){
    getUrl('/katinku','AdminController@index','dashboard');
});
