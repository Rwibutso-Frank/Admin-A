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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/map', function () {
    return view('admin.register');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

    
Route::group(['milldeware'=> ['admin', 'auth']], function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
        }); 
    Route::get('/user-register','admin\DashboardController@registered');
    Route::get('/user-edit-{id}','admin\DashboardController@editUser');   
    Route::put('/user-update/{id}','admin\DashboardController@updateUser');
    Route::get('/user-delete/{id}','admin\DashboardController@deleteUser');    

});