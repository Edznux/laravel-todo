<?php
class Task extends Eloquent{

	public $timestamps = false;				// il n'y a pas de timestamp sur les tâches, il faut donc désactivé la requete automatique sur les champ created_at et updated_at
	protected $fillable = ['text', 'done']; //on autorise la modification uniquement sur 'text' et 'done' (on aurais pus utilisé guarded pour ne verrouiller que l'id)

}