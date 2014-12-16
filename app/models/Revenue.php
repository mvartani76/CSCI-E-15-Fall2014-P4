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

	public function revenuetypes() {
		# Define a many-to-many relationship.
		return $this->belongsToMany('Revenue_type');
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
        static::deleting(function($revenue) {
            DB::statement('DELETE FROM project_revenue WHERE revenue_id = ?', array($revenue->id));
        });
        static::deleting(function($revenue) {
            DB::statement('DELETE FROM revenue_revenue_type WHERE revenue_id = ?', array($revenue->id));
        });
    }

}
