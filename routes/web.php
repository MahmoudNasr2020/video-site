<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;





Auth::routes(['verify'=>true]);


Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::post('/homeVideos', 'HomeController@videos')->name('home.videos');


Route::group(['namespace'=>'website'],function(){



        Route::group(['namespace' => 'profile'], function () {

        Route::get('profile/{id}/{name?}','profileController@profile')->name('website.profile')->middleware('verified');

        Route::get('setting/{id}/{name?}','settingController@index')->name('website.setting')->middleware('verified');

        Route::post('setting/edit','settingController@edit')->name('profile.edit')->middleware('verified');

        Route::post('setting/update','settingController@update')->name('profile.update')->middleware('verified');


    });

    Route::post('contact','contact\contactController@send')->name('website.contact');


    Route::post('like','like\likeController@index')->name('website.like')->middleware('auth')->middleware('verified');

    Route::post('likeComment','like\likeController@comment')->name('website.likeComment')->middleware('auth')->middleware('verified');

    Route::get('showAllVideos','video\videoController@showVideos')->name('showAllVideos');

    Route::post('showAllVideosajax','video\videoController@videos')->name('showAllVideosajax');

    Route::get('videosearch','video\videoController@search')->name('videosearch');

    Route::post('videosearchload','video\videoController@loadSearch')->name('website.loadSearch');

    Route::get('/','welcome\welcomeController@index')->name('/');

    Route::get('/category/{id}','category\categoryController@index')->name('website.category');

    Route::get('/muslim/{id}','muslim\muslimController@index')->name('website.muslims');

    Route::get('/video/{id}','video\videoController@index')->name('website.video');

    Route::get('/tag/{id}','tags\tagController@index')->name('website.tags');

    Route::group(['namespace' => 'comments'], function () {

        Route::group(['middleware' => ['auth','verified']], function () {

            Route::post('addComment','commentController@add')->name('website.comment.add');

            Route::post('updateComment','commentController@edit')->name('website.comment.update');

            Route::post('editComment','commentController@update')->name('website.comment.edit');

            Route::post('deleteComment','commentController@destory')->name('website.comment.delete');

        });

        Route::post('loadComment','commentController@load_data')->name('website.loadData');

    });

    Route::get('pages/{id}/{slog?}','pages\pagesController@index')->name('website.pages');


});
