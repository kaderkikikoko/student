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
use App\Student;
Route::get('/', function () {
    return view('index');
});
Route::get('/view',"adminstudent@view");
Route::get('/add',"adminstudent@add");
Route::post('/add',"adminstudent@add");


Route::get('/delete/{id}', function ($id) {
	$stu=Student ::find($id);
	$stu->delete();
	return redirect('view');
    
});
Route::get('edit/{id}',"adminstudent@edit");
Route::post('edit/{id}',"adminstudent@edit");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/addart',"manage@addart");
Route::post('/addart',"manage@addart");
Route::get('/viewart',"manage@viewart");
Route::get('/read/{id}',"manage@read");
Route::get('/rea/{id}',"manage@read1");
Route::post('/read/{id}',"manage@read");
Route::get('/file',"filemanage@file");
Route::post('/file',"filemanage@file");
Route::get('/fileview',"filemanage@fileview");
Route::post('/fileadd',"filemanage@fileadd");
Route::get('/fileadd',"filemanage@fileadd");