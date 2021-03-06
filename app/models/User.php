<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function user() {
	# Book belongs to Author
	# Define an inverse one-to-many relationship.
	return $this->belongsTo('Permission');
    }

    public function projects()
    {
    	return $this->belongsToMany('Project');
    }

    public function comments()
    {
    	return $this->belongsToMany('Comment');
    }

    public function tasks()
    {
    	return $this->belongsToMany('Task');
    }

    # Count the number of projects associated with user
    public function countprojects()
    {
    	$i = 0;
		foreach ($this['projects'] as $project)
		{
			$i = $i+1;
		}
		return $i;
    }

    # Count the number of comments associated with user
    public function countcomments()
    {
    	$i = 0;
		foreach ($this['comments'] as $comment)
		{
			$i = $i+1;
		}
		return $i;
    }

    # Count the number of tasks associated with user
    public function counttasks()
    {
    	$i = 0;
		foreach ($this['tasks'] as $task)
		{
			$i = $i+1;
		}
		return $i;
    }


	/**
     * Get the user's full name by concatenating the first and last names
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

}
