<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Task extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tasks';

    public $timestamps = true;


    public function users()
    {
    	return $this->belongsToMany('User');
    }

    # Model events...
    # http://laravel.com/docs/eloquent#model-events
    public static function boot() {
        parent::boot();

        static::deleting(function($task) {
            DB::statement('DELETE FROM task_user WHERE task_id = ?', array($task->id));
        });
    }


}
