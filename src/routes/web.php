<?php

Route::group(['namespace' => 'CosmoIagica\Contact\Http\Controllers'], function(){
    Route::get('contact', 'ContactController@index')->name('contact');
});