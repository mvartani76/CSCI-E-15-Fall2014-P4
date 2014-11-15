<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Expense extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'expenses';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function expense() {
		# Expense belongs to Proforma
		# Define an inverse one-to-many relationship.
		return $this->belongsToMany('Proforma');
    }

}
