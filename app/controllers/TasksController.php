<?php

class TasksController extends BaseController {

	//affiche l'index pour les taches
	public function index(){
		$tasks= Task::get();
		return View::make("home",['tasks'=>$tasks]);
	}

	// ajouter une tache
	public function store(){
		// insert dans la bdd avec uniquement le champ "text", les autre sont par default (id auto incrémenté et "done" = 0 par default)
		DB::table('tasks')->insert(["text" => Input::get("tache")]);
		// return Input::get("tache");
		return Redirect::to("/");
	}

	//update une tache (a faire / fait)
	public function update($id){
		$task = Task::findOrFail($id);
		$task->update(["done" => 1]);
		return Redirect::to("/");
	}

	// supprime une tâche
	public function destroy($id){
		$task = Task::destroy($id);
		return Redirect::to("/");
	}
}