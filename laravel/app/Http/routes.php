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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('home/{id?}',function($id = 1){
    return __CLASS__ . "::" . __METHOD__ . "\nid = $id";
})->where('id','\d+');
Route::controller('/','Default/DefalutController');
