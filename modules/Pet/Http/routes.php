<?php

Route::group(['middleware' => 'web', 'prefix' => 'pet', 'namespace' => 'TGL\Pet\Http\Controllers'], function()
{
    Route::get('/', 'PetController@index');
});
