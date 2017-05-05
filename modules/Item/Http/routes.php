<?php

Route::group(['middleware' => 'web', 'prefix' => 'item', 'namespace' => 'TGL\Item\Http\Controllers'], function()
{
    Route::get('/', 'ItemController@index');
});
