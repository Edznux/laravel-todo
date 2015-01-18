<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


/*
* GET
*/
// Route::get('/', "TasksController@index"); //index

/*
* POST
*/
// Route::post('/tasks', "TasksController@add");		//ajouter une tâche

/*
* PUT
*/
// Route::put('/tasks/{id}', "TasksController@edit");	//modifier une tâche spécifique

/*
* DELETE
*/
// Route::delete('/tasks/{id}', "TasksController@del"); //suprime une tâche spécifique
Route::when('*','csrf',['POST','PUT','DELETE']); // gestion du csrf dans les requêtes "critique" (celle de modification)
Route::get('/','TasksController@index');
Route::resource('/tasks','TasksController');
