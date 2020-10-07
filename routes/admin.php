<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin','namespace'=>'adminPanel'], function () {


    Route::group(['namespace' => 'login','prefix'=>'login','middleware'=>'guest:admin'], function () {


        Route::get('/','adminLoginController@index')->name('admin.login.home');

        Route::post('/loginstore','adminLoginController@login')->name('admin.login');




    });

    Route::post('/logoutAdmin','login\adminLoginController@logout')->name('admin.logout');

   //Route::get('/','homeController@index');



    Route::group(['middleware'=>'auth:admin'],function(){

        Route::get('/home','homeController@index')->name('admin.home');

        Route::group(['namespace' => 'users','prefix'=>'users'], function () {

            Route::get('/','usersController@index')->name('admin.users');

            Route::post('/edit','usersController@edit')->name('admin.users.edit');

            Route::post('/store','usersController@store')->name('admin.users.store');

            Route::post('/update','usersController@update')->name('admin.users.update');

            Route::post('/destroy','usersController@destroy')->name('admin.users.delete');
        });

        Route::group(['namespace' => 'muslims','prefix'=>'muslims'], function () {

            Route::get('/','muslimController@index')->name('admin.muslims');

            Route::post('/edit','muslimController@edit')->name('admin.muslim.edit');

            Route::post('/store','muslimController@store')->name('admin.muslim.store');

            Route::post('/update','muslimController@update')->name('admin.muslim.update');

            Route::post('/destroy','muslimController@destroy')->name('admin.muslim.delete');


        });

            Route::group(['namespace' => 'tags','prefix'=>'tags'], function () {

            Route::get('/','tagsController@index')->name('admin.tags');

            Route::post('/edit','tagsController@edit')->name('admin.tags.edit');

            Route::post('/store','tagsController@store')->name('admin.tags.store');

            Route::post('/update','tagsController@update')->name('admin.tags.update');

            Route::post('/destroy','tagsController@destroy')->name('admin.tags.delete');


        });

              Route::group(['namespace' => 'pages','prefix'=>'pages'], function () {

            Route::get('/','pageController@index')->name('admin.page');

            Route::post('/edit','pageController@edit')->name('admin.page.edit');

            Route::post('/store','pageController@store')->name('admin.page.store');

            Route::post('/update','pageController@update')->name('admin.page.update');

            Route::post('/destroy','pageController@destroy')->name('admin.page.delete');


        });

        Route::group(['namespace' => 'cat','prefix'=>'cats'], function () {

            Route::get('/','catController@index')->name('admin.cat');

            Route::post('/edit','catController@edit')->name('admin.cat.edit');

            Route::post('/store','catController@store')->name('admin.cat.store');

            Route::post('/update','catController@update')->name('admin.cat.update');

            Route::post('/destroy','catController@destroy')->name('admin.cat.delete');


        });


         Route::group(['namespace' => 'videos','prefix'=>'videos'], function () {

            Route::get('/','videoController@index')->name('admin.video');

            Route::get('/edit/{id}','videoController@edit')->name('admin.video.edit');

            Route::post('/store','videoController@store')->name('admin.video.store');

            Route::post('/update','videoController@update')->name('admin.video.update');

            Route::post('/destroy','videoController@destroy')->name('admin.video.delete');


        });

           Route::group(['namespace' => 'comment','prefix'=>'comment'], function () {


            Route::post('/storecomment','commentController@commentStore')->name('admin.comment.store');

            Route::post('/editcomment','commentController@commentedit')->name('admin.comment.edit');

            Route::post('/updatecomment','commentController@commentupdate')->name('admin.comment.update');

            Route::post('/destroyComment','commentController@destroyComment')->name('admin.comment.delete');


        });
    });

    Route::group(['prefix' => 'contact','namespace'=>'contact'], function () {

            Route::get('index','contactController@index')->name('contact.index');

            Route::post('delete','contactController@delete')->name('contact.delete');

            Route::post('show','contactController@show')->name('contact.show');

            Route::post('selectEmail','contactController@email')->name('contact.replay.show');

            Route::post('sendtEmail','contactController@send')->name('contact.send');
    });

});

