<?php

Route::group(['middleware' => 'web', 'prefix' => 'mail', 'namespace' => 'TGL\Mail\Http\Controllers'], function()
{
    Route::get('/', 'MailController@index');
});
