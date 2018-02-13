<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => '/itinerary'], function () {
    Route::get('/create', 'ItineraryController@create')->name('itinerary.create');
    Route::post('/', 'ItineraryController@store')->name('itinerary.store');
});