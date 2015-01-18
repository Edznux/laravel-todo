<?php

class TasksController extends BaseController {

	//affiche l'index pour les tâches
	public function index(){
		$tasks= Task::get();
		return View::make("home",['tasks'=>$tasks]);
	}

	// ajouter une tâche
	public function store(){
		// insert dans la bdd avec uniquement le champ "text", les autres sont par défaut (id auto incrémenté et "done" = 0 par default)
		$rules = [
			'text' => 'required|min:8'
		];
		$v = Validator::make(Input::get(),$rules);	// on verifie les champs

		if( $v->passes() ){								//gestion des erreurs : on insere ou on redirige avec une erreur
			DB::table('tasks')->insert(["text" => Input::get("text")]);
		}else{
			return Redirect::to("/")->withInput()->withErrors($v->errors());	// on re-remplis le champs avec les inputs précédement rentré (pas vraiment utile dans ce cas, mais bonne pratique)
		}

		return Redirect::to("/");
	}

	//update une tâche (A faire / fait)
	public function update($id){
		$task = Task::findOrFail($id);
		$task->update(["done" => 1]);
		return Redirect::to("/");
	}

	// supprimer une tâche
	public function destroy($id){
		$task = Task::destroy($id);
		return Redirect::to("/");
	}
}
