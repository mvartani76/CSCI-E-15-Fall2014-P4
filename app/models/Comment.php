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


    public function users()
    {
    	return $this->belongsToMany('User');
    }

	public function projects() {

        return $this->belongsToMany('Project');
    }

    # Model events...
    # http://laravel.com/docs/eloquent#model-events
    public static function boot() {
        parent::boot();
        static::deleting(function($comment) {
            DB::statement('DELETE FROM comment_project WHERE comment_id = ?', array($comment->id));
        });
        static::deleting(function($comment) {
            DB::statement('DELETE FROM comment_user WHERE comment_id = ?', array($comment->id));
        });
    }


}
