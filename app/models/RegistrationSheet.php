<?php

class RegistrationSheet extends Eloquent {

	/* Alowing Eloquent to insert data into our database */
	protected $fillable = array('name','rollno','phone','address','accommodation'
		'email','tshirtsize','specialinstruction');

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'registrationsheets';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array();

}
