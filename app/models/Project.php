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

    public $timestamps = true;


    public function users()
    {
    	return $this->belongsToMany('User');
    }

    public function comments()
    {
        return $this->belongsToMany('Comment');
    }    

	public function proforma() {
		# Project may have many Proformas
        # Define a one-to-many relationship.
        return $this->belongsToMany('Proforma');
    }

	public function convert_to_percent($input) {
		# converts decimal values to percent
		if (strpos($input,'%') !== false) {
    		echo ($input*100).'%';
    	}
    	else
    	{
			echo $input.'%';
		}
    }


    # Model events...
	# http://laravel.com/docs/eloquent#model-events
	public static function boot() {
        parent::boot();
        static::deleting(function($project) {
            DB::statement('DELETE FROM project_user WHERE project_id = ?', array($project->id));
        });
        static::deleting(function($project) {
            DB::statement('DELETE FROM comment_project WHERE project_id = ?', array($project->id));
        });
	}

}
