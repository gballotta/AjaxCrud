<?php

class Person extends \Eloquent {

	// Add your validation rules here
	public static $rules = array(
		'nome' => 'required',
		'cognome' => 'required',
		'email' => 'required|email',
		'livello' => 'required|int'
	);

	// Don't forget to fill this array
	protected $fillable = array('nome', 'cognome', 'email', 'livello');

}