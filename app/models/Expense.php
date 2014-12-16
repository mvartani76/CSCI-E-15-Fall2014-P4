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

	public function expensetypes() {
		# Define a many-to-many relationship.
		return $this->belongsToMany('Expense_type');
    }
    public function projects() {
		# Define a many-to-many relationship.
		return $this->belongsToMany('Project');
	}

	public function users() {
		# Define a many-to-many relationship.
		return $this->belongsToMany('User');
    }

    # Model events...
    # http://laravel.com/docs/eloquent#model-events
    public static function boot() {
        parent::boot();
        static::deleting(function($expense) {
            DB::statement('DELETE FROM expense_project WHERE expense_id = ?', array($expense->id));
        });
        static::deleting(function($expense) {
            DB::statement('DELETE FROM expense_expense_type WHERE expense_id = ?', array($expense->id));
        });
    }
}
