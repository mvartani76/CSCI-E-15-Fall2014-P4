<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Comment extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'comments';

    public $timestamps = true;


    public function sending_users()
    {
    	return $this->belongsToMany('User');
    }

    public function intended_users()
    {
        return $this->belongsToMany('User');
    }

	public function projects() {

        return $this->belongsToMany('Project');
    }

}
