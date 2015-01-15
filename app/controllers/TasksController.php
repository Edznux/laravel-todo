<?php

class TasksController extends BaseController {

	//affiche l'index pour les taches
	public function index(){
		$tasks = Task::get();
		return View::make("home",['tasks'=>$tasks]);
	}

	// ajouter une tache
	public function add(){

		DB::table('tasks')->insert(["text" => Input::get("tache")]); // insert dans la bdd avec uniquement le champ "text", les autre sont default
		// return Input::get("tache");
		return Redirect::to("/");
	}

	//editer une tache (a faire / fait)
	public function edit($id){
		$task = Task::findOrFail($id);
	}
}