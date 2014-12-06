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


// Process form for a new project
	public function postCreatecomment($uid) {

		$user = Auth::user();
		$project = Project::find($pid);

		# Step 1) Define the rules
		$rules = array(
			'project_name' => 'required',
			'start_year' => 'required',
			'end_year' => 'required',
			'tax_rate' => 'required',
			'discount_rate' => 'required',
			'terminal_rd' => 'required',
			'terminal_sga' => 'required',
			'terminal_growth_rate' => 'required',
			'capex_percentage' => 'required'
		);
		# Step 2)
		$validator = Validator::make(Input::all(), $rules);
		# Step 3
		if($validator->fails()) {
			return Redirect::to('/edit-project/'.$user->id.'/'.$project->id)
				->with('flash_message', 'Sign up failed; please fix the errors listed below.')
				->with('flash_type', 'alert-danger')
				->withInput()
				->withErrors($validator);
		}
    
	    $project->project_name = Input::get('project_name');
	    $project->project_description = Input::get('project_description');
	    $project->start_year = Input::get('start_year');
	    $project->end_year = Input::get('end_year');
	    $project->tax_rate = Input::get('tax_rate');
	    $project->discount_rate = Input::get('discount_rate');
	    $project->terminal_rd = Input::get('terminal_rd');
	    $project->terminal_sga = Input::get('terminal_sga');
	    $project->terminal_growth_rate = Input::get('terminal_growth_rate');
	    $project->capex_percentage = Input::get('capex_percentage');
	    
	    try {
			$project->save();
		}
		catch (Exception $e) {
			return Redirect::to('/edit-project/'.$user->id.'/'.$project->id)
				->with('flash_message', 'Sign up failed; please try again.')
				->with('flash_type', 'alert-danger')
				->withInput();
		}

		return Redirect::to('/user-project/'.$user->id)->with('flash_message', 'Project Successfully Created!');
	}
}