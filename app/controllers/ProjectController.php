<?php
class ProjectController extends BaseController {


	/**
	*
	*/
	public function __construct() {
		# Make sure BaseController construct gets called
		parent::__construct();
		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	public function getCreateproject($id) {
		$user = User::find($id);
		return View::make('create-project',['user' => $user]);
	}

	// Process form for a new project
	public function postCreateproject($uid) {

		$user = Auth::user();
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
			return Redirect::to('/create-project/{id}')
				->with('flash_message', 'Sign up failed; please fix the errors listed below.')
				->with('flash_type', 'alert-danger')
				->withInput()
				->withErrors($validator);
		}
    
	    $project = new Project();
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
			$user->projects()->attach($project->id);
			$user->save();
		}
		catch (Exception $e) {
			return Redirect::to('/create-project/{id}')
				->with('flash_message', 'Sign up failed; please try again.')
				->with('flash_type', 'alert-danger')
				->withInput();
		}

		return Redirect::to('/user-project/{id}')->with('flash_message', 'Project Successfully Created!');		
	}


	public function getEditproject($uid,$pid) {
		$project = Project::find($pid);
		$user = Auth::user();
		return View::make('/edit-project',['user' => $user],['project' => $project])->withOnly('project');
	}


// Process form for a new project
	public function postEditproject($uid,$pid) {

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

		return Redirect::to('/user-project/'.$user->id)->with('flash_message', 'Project Successfully Updated!');
	}

	public function getAddrevenue($id) {
		$user = User::find($id);
		return View::make('add-revenue',['user' => $user]);
	}

	// Process form for a new revenue
	public function postAddrevenue($uid) {

		$user = Auth::user();
		# Step 1) Define the rules
		$rules = array(
			'revenue_description' => 'required',
			'revenuetype' => 'required',
			'amount' => 'required'
		);
		# Step 2)
		$validator = Validator::make(Input::all(), $rules);
		# Step 3
		if($validator->fails()) {
			return Redirect::to('/add-revenue/{id}')
				->with('flash_message', 'Sign up failed; please fix the errors listed below.')
				->with('flash_type', 'alert-danger')
				->withInput()
				->withErrors($validator);
		}
    
	    $revenue = new Revenue();
	    $project->project_name = Input::get('project_name');
	    $project->project_description = Input::get('project_description');
	    $project->start_year = Input::get('start_year');
			    
	    try {
			$revenue->save();
			$project->revenues()->attach($revenue->id);
			$project->save();
		}
		catch (Exception $e) {
			return Redirect::to('/create-project/{id}')
				->with('flash_message', 'Sign up failed; please try again.')
				->with('flash_type', 'alert-danger')
				->withInput();
		}

		return Redirect::to('/user-project/{id}')->with('flash_message', 'Project Successfully Created!');		
	}

}