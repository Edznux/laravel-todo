<?php

class TasksController extends BaseController {

	//affiche l'index pour les taches
	public function index(){
		// $tasks = Task::get();
		$tasks= Task::where("done","=",0)->get();
		$tasksDone = Task::where("done","=",1)->get();
		return View::make("home",['tasks'=>$tasks,'tasksDone'=>$tasksDone]);
	}

	// ajouter une tache
	public function add(){
		// insert dans la bdd avec uniquement le champ "text", les autre sont par default (id auto incrémenté et "done" = 0 par default)
		DB::table('tasks')->insert(["text" => Input::get("tache")]);
		return Redirect::to("/");
	}

	//editer une tache (a faire / fait)
	public function edit($id){
		$task = Task::findOrFail($id);
		$task->update(["done" => 1]);
		return Redirect::to("/");
	}
	// supprime une tâche
	public function del($id){
		$task = Task::findOrFail($id);
		$task->delete();
		return Redirect::to("/");
	}
}