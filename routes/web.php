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

<<<<<<< HEAD
Route::resource('perusahaan','perusahaanController');
// Route::resource('alumni','AlumniController');

Route::get('/alumni','AlumniController@index');
Route::get('/alumni/detail{nis}','AlumniController@show');
Route::get('/alumni/tambah','AlumniController@tambah');
Route::post('/alumni/store','AlumniController@store');
Route::get('/alumni/edit/{nis}','AlumniController@edit');
Route::put('/alumni/update/{nis}','AlumniController@update');
Route::get('/alumni/delete/{nis}','AlumniController@delete');

Route::resource('lowongan','lowonganController');
=======
Auth::routes();

>>>>>>> dede7cd35e89d0c3f256f11447d3b2139272d916




Route::get('/home', 'HomeController@index')->name('home');  



Route::group(['middleware'=>['auth','checkRole:admin,alumni']],function(){
    Route::get('/dashboard',function(){
        return view('dashboard');
    }); 
    Route::get('/alumni','AlumniController@index');
    Route::get('/alumni/detail','AlumniController@show');
    Route::get('/alumni/tambah','AlumniController@tambah');
    Route::post('/alumni/store','AlumniController@store');
    Route::get('/alumni/edit/{nis}','AlumniController@edit');
    Route::put('/alumni/update/{nis}','AlumniController@update');
    Route::get('/alumni/delete/{nis}','AlumniController@delete');   
}); 

<<<<<<< HEAD
=======
Route::group(['middleware'=>['auth','checkRole:admin']],function(){
    Route::get('/dashboard',function(){
        return view('dashboard');
    });  
    Route::resource('lowongan','lowonganController');
    Route::resource('perusahaan','perusahaanController');
}); 
>>>>>>> dede7cd35e89d0c3f256f11447d3b2139272d916
