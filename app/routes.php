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
Route::get('/', "TasksController@index"); //index

/*
*POST
*/
Route::post('/tasks/{id}', "TasksController@edit");	//modifier une tâche spécifique
Route::post('/tasks', "TasksController@add");		//ajouter une tâche