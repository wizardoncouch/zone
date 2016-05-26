<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
//    $response = \PlusTelecomEagleEye\EagleEye::('09423469975', 'this is a test extra');
//    dd($response);
//    return view('welcome');
});

//Route::post('eagle-eye/save', '\PlusTelecomEagleEye\Controllers\EagleEyeController@saveSnapshot');
Route::get(
    'bluesnap/webhook',
    'TestController@handleWebhook'
);
