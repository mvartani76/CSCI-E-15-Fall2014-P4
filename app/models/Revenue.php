<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Revenue extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'revenues';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function revenue() {
		# Revenue belongs to Proforma
		# Define an inverse one-to-many relationship.
		return $this->belongsToMany('Proforma');
    }

}
