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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard3', 'AdminController@index')->name('dashboard3');
Route::get('/dashboard2', 'EmployeeController@index')->name('dashboard2');



//Route::group(['prefix'=>admin],function(){
  //  Route::get('/AdminLog','Auth\AdminLogController@showLoginForm');
    //Route::post('/AdminLog','Auth\AdminLogController@loginadmin');
    //Route::get('/','AdminController@index');
//});
//Route::group(['prefix'=>employee],function(){
   // Route::get('/EmployLog','Auth\EmployLogController@showLoginForm');
    //Route::post('/EmployLog','Auth\EmployLogController@loginemployee');
   // Route::get('/','EmployeeController@index');
//});

Route::get('/welcome','SafirController@main_page');
Route::get('/contact','SafirController@contact');
Route::get('/imag','SafirController@login');
Route::get('/Employlog','SafirController@Employlog');
Route::get('/blogs','SafirController@blogs');
Route::get('/reservation','SafirController@Reser');
Route::get('/AdminLog','SafirController@AdminLog');
Route::get('/register_page','SafirController@register');
Route::get('/dashboard1','SafirController@dash1');
Route::get('/dashboard2','SafirController@dash2');
Route::get('/dashboard3','SafirController@dash3');
Route::get('/payment','SafirController@pay');
Route::get('/bill','SafirController@bill');
Route::get('/dashboard3','SafirController@show');
Route::get('/dashboard2','SafirController@show2');


Route::get('/dashboard1','SafirController@show3');
Route::get('/bill','SafirController@showbill');
Route::get('/users/delete/{id}','SafirController@delet2');
Route::get('/reservations/delete/{id}','SafirController@delet4');
Route::get('/employees/delete/{id}','SafirController@delet3');
Route::get('/ADDEMP','SafirController@addemp');


Route::post('/reservation','SafirController@store');
Route::post('/ADDEMP','SafirController@store2');
Route::post('/payment','SafirController@storepay');
Route::post('/dashboard3','SafirController@update');
//Route::post('/dashboard3','SafirController@update2');

Route::post('/dashboard2','SafirController@update3');
Route::post('/AdminLog','SafirController@log');
Route::post('/Employlog','SafirController@log2');

Route::get('/show','RoomController@index');

Route::get('/reservation','SafirController@coun');















