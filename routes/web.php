<?php
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
Route::resource('index', 'Login\Logincontroller');
Route::get('login', 'View\Viewcontroller@loginview');
Route::get('userview', 'View\Viewcontroller@userview');
