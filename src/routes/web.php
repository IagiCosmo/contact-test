<?php

Route::group(['namespace' => 'Cosmo\Contact\Http\Controllers'], function(){
    Route::get('contact', 'ContactController@index')->name('contact');
});