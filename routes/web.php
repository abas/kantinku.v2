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

Route::group([
    'prefix'=>'admin/v1/kantinku',
    'middleware'=>'auth'
],function(){
    getUrl('/','AdminController@index','dashboard');
    Route::group(['prefix'=>'account'],function(){
        getUrl('/','UserController@profile','admin-userprofile');
        postUrl('/updateprofle','UserController@update','admin-updateprofile');
    });

    Route::group(['prefix'=>'get'],function(){
        // getUrl('/tambahmenu','AdminController@tambahMenu','admin-tambahmenu');
        Route::get('/tambahmenu','AdminController@tambahMenu')->middleware('hasRek')->name('admin-tambahmenu');
        getUrl('/listmenu','MenuController@listMenu','admin-listmenu');
        getUrl('/updatemenu{id_menu}','MenuController@edit','admin-editmenu');
        getUrl('/deletemenu{id}','MenuController@delete','admin-deletemenu');
    });

    Route::group(['prefix'=>'post'],function(){
        postUrl('/tambahmenu','MenuController@simpan','postAddmenu');
        postUrl('/kurangi{id_menu}menu','MenuController@kurangi','admin-kurangimenu');
        postUrl('/updatemenu{id_menu}','MenuController@update','admin-updatemenu');
        postUrl('/updatenorek{id_user}','RekeningController@update','admin-updaterekening');
    });
});




// test route

getUrl('uploads/images/user/','AdminController@pprofile','tes-get-pprofile');

Route::group(['prefix'=>'test'],function(){
    Route::group(['prefix'=>'get'],function(){
        getUrl('/uploadimage','MenuController@getUploadImage','test-get-uploadimage');
        getUrl('/deletemenu{id}','MenuController@delete','tes-get-deletemenu');
   });

   Route::group(['prefix'=>'post'],function(){
    postUrl('/uploadimage','MenuController@postUploadImage','test-post-uploadimage');
   });
});

