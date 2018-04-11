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
Auth::routes();

Route::get('/', function () {
    return view('index');
});



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/verify/{verifyCode}', 'Auth\RegisterController@verifyUser');
Route::get('/user/addToDoList','ToDoListController@create')->name('addToDo');
Route::post('/user/addToDoList','ToDoListController@store')->name('addToDo.store');
Route::get('/user/editToDoList/{to_do_list}','ToDoListController@edit')->name('edit.todo');
Route::get('/user/deleteToDoList/{id}','ToDoListController@delete')->name('delete.todo');
Route::post('/user/updateToDoList/{id}','ToDoListController@update')->name('update.todo');

