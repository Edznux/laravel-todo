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
		$rules = [
			'text' => 'required|min:8'
		];
		$v = Validator::make(Input::get(),$rules);	// on verifie les champs

		if( $v->passes() ){													//gestion des erreur : on insere ou on redirige avec une erreur
			DB::table('tasks')->insert(["text" => Input::get("text")]);
		}else{
			return Redirect::to("/")->withInput()->withErrors($v->errors());	// on re-remplis le champs avec les input précédement rentreé (pas vraiment utile dans ce cas, mais bonne pratique)
		}

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