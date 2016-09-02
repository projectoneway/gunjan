<?php

class Socadm00Sodsddtl extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'socadm00_sodsddtl';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

     const CREATED_AT = 'create_datetime';
     const UPDATED_AT = 'last_update';
}
