<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Proforma extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'proformas';

	public function revenue() {
		# Proforma has many Revenues
        # Define a one-to-many relationship.
        return $this->belongsToMany('Revenue');
    }

	public function expense() {
		# Proforma has many Expenses
        # Define a one-to-many relationship.
        return $this->belongsToMany('Expense');
    }

}
