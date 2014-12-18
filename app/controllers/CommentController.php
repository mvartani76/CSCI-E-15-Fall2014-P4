<?php
class CommentController extends BaseController {


	/**
	*
	*/
	public function __construct() {
		# Make sure BaseController construct gets called
		parent::__construct();
		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}


	public function getCreatecomment($uid) {
		$user = Auth::user();
		$project = array('' => 'Please Select Relevant Project') + Project::lists('project_name');
		return View::make('/create-comment',['user' => $user], ['project' => $project]);
	}


	// Process form for a new comment
	public function postCreatecomment() {

		$user = Auth::user();
		$comments = Comment::all();
		
		# needed to add an additional increment to get the correct project -- must be base 0 numbering?
		$project = Project::Findorfail(Input::get('project')+1);

		# Step 1) Define the rules
		$rules = array(
			'comment_title' => 'required',
			'comment_text' => 'required',
			'intended_user' => 'required'
		);
		# Step 2)
		$validator = Validator::make(Input::all(), $rules);
		# Step 3
		if($validator->fails()) {
			return Redirect::to('/create-comment/'.$user->id)
				->with('flash_message', 'Create Comment failed; please fix the errors listed below.')
				->with('flash_type', 'alert-danger')
				->withInput()
				->withErrors($validator);
		}
    

    	$comment = New Comment();
	    $comment->comment_title = Input::get('comment_title');
	    $comment->comment_text = Input::get('comment_text');
	    # needed to add an additional increment to get the correct user -- must be base 0 numbering?
	    $comment->intended_user = Input::get('intended_user')+1;

	    try {
			$comment->save();
			$user->comments()->attach($comment->id);
			$user->save();
			$project->comments()->attach($comment->id);
			$project->save();
			
		}
		catch (Exception $e) {
			return Redirect::to('/create-comment/'.$user->id)
				->with('flash_message', 'Sign up failed; please try again.')
				->with('flash_type', 'alert-danger')
				->withInput();
		}

		return Redirect::to('/user-comment/'.$user->id)->with('flash_message', 'Comment Created!');
	}

	// Process form to delete a comment
	public function deleteComment($uid,$cid) {

		$user = Auth::user();
		echo $cid;
		
		try {
	        $comment = Comment::findOrFail($cid);

	    }
	    catch(exception $e) {
	        return Redirect::to('/user-comment/{{ user->id }}')->with('flash_message', 'Could not delete comment '. $cid .' - not found.')
	        													->withInput();
	    }

	    Comment::destroy($cid);
		return Redirect::to('/user-comment/{{ user->id }}')->with('flash_message', 'Comment deleted.');
	    
	}

	public function getCreatetask($uid) {
		$user = Auth::user();
		return View::make('/create-task',['user' => $user]);
	}


	// Process form for a new task
	public function postCreatetask() {

		$user = Auth::user();
		$comments = Comment::all();

		# Step 1) Define the rules
		$rules = array(
			'task_title' => 'required',
			'task_text' => 'required'
		);
		# Step 2)
		$validator = Validator::make(Input::all(), $rules);
		# Step 3
		if($validator->fails()) {
			return Redirect::to('/create-task/'.$user->id)
				->with('flash_message', 'Create Task failed; please fix the errors listed below.')
				->with('flash_type', 'alert-danger')
				->withInput()
				->withErrors($validator);
		}
    

    	$task = New Task();
	    $task->task_title = Input::get('task_title');
	    $task->task_text = Input::get('task_text');

	    try {
			$task->save();
			$user->tasks()->attach($task->id);
			$user->save();
			
		}
		catch (Exception $e) {
			return Redirect::to('/create-task/'.$user->id)
				->with('flash_message', 'Create task failed; please try again.')
				->with('flash_type', 'alert-danger')
				->withInput();
		}

		return Redirect::to('/user-task/'.$user->id)->with('flash_message', 'Task Created!');
	}

	// Process form to delete a task
	public function deleteTask($uid,$tid) {

		$user = Auth::user();
		echo $tid;
		
		try {
	        $task = Task::findOrFail($tid);

	    }
	    catch(exception $e) {
	        return Redirect::to('/user-task/{{ user->id }}')->with('flash_message', 'Could not delete task '. $tid .' - not found.')
	        													->withInput();
	    }

	    Task::destroy($tid);
		return Redirect::to('/user-task/{{ user->id }}')->with('flash_message', 'Task deleted.');
	    
	}


}