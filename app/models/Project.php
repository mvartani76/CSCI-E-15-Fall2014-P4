<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Project extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'projects';

    public function users()
    {
    	return $this->belongsToMany('User');
    }

	public function proforma() {
		# Project may have many Proformas
        # Define a one-to-many relationship.
        return $this->belongsToMany('Proforma');
    }

    # Model events...
	# http://laravel.com/docs/eloquent#model-events
	public static function boot() {
        parent::boot();
        static::deleting(function($project) {
            DB::statement('DELETE FROM project_user WHERE project_id = ?', array($project->id));
        });
	}

}
