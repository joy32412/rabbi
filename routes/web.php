<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get(uri:'/',actio: function ( ) {
    return view( view: 'welcome');
})
Route::get( uri: '/rabbi',action: [Bladecontroller::class,'blade'])->( name: 'blade');
