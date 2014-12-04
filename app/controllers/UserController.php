<?php
class UserController extends BaseController {


	/**
	*
	*/
	public function __construct() {
		# Make sure BaseController construct gets called
		parent::__construct();
		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}



    /**
	* Show the new user signup form
	* @return View
	*/
	public function getCreateuser() {
		return View::make('create-user');
	}

	public function getEdituser($id) {
		$user = User::find($id);
		return View::make('edit-user',['user' => $user]);
	}

	public function getUserdashboard($id) {
		$user = User::find($id);
		return View::make('user-dashboard',['user' => $user]);
	}

	public function getUserproject($id) {
		$user = User::find($id);
		return View::make('user-project',['user' => $user]);
	}

	// Process form to delete a project
	public function deleteUserproject($uid,$pid) {

		$user = Auth::user();
		

		try {
	        $project = Project::findOrFail($pid)->destroy($pid);
	        return Redirect::to('/user-project/{{ user->id }}')->with('flash_message', 'Project deleted.');
	    }
	    catch(exception $e) {
	        return Redirect::to('/user-project/{{ user->id }}')->with('flash_message', 'Could not delete project - not found.');
	    }
	    
	}

	/**
	* Create a New User
	* @return Redirect
	*/
	public function postCreateuser() {
		# Step 1) Define the rules
		$rules = array(
			'username' => 'required|unique:users,username',
			'email' => 'required|email|unique:users,email',
			'password' => 'required|min:6'
		);
		# Step 2)
		$validator = Validator::make(Input::all(), $rules);
		# Step 3
		if($validator->fails()) {
			return Redirect::to('/create-user')
				->with('flash_message', 'Sign up failed; please fix the errors listed below.')
				->with('flash_type', 'alert-danger')
				->withInput()
				->withErrors($validator);
		}

	    $user = new User();
	    $user->first_name = Input::get('first_name');
	    $user->last_name = Input::get('last_name');
	    $user->company_name = Input::get('company_name');
	    $user->username = Input::get('username');
	    $user->address_1 = Input::get('address_1');
	    $user->address_2 = Input::get('address_2');
	    $user->city = Input::get('city');
	    $user->state = Input::get('state');
	    $user->zip_code = Input::get('zip_code');
	    $user->country = Input::get('country');
	    $user->email = Input::get('email');
	    $user->mobile_phone = Input::get('mobile_phone');
	    $user->password = Hash::make(Input::get('password'));

	    # set the default permission level
	    $user->permission_id = 1;

		try {
			$user->save();
		}
		catch (Exception $e) {
			return Redirect::to('/create-user')
				->with('flash_message', 'Sign up failed; please try again.')
				->with('flash_type', 'alert-danger')
				->withInput();
		}
		# Log in
		Auth::login($user);
		return Redirect::to('/user-dashboard/{id}')->with('flash_message', 'Welcome to the Financial Valuation Web Application!');
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

		#$project->users()->attach($user->id);
		
	    
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

		return Redirect::to('/user-project/'.$user->id)->with('flash_message', 'Project Successfully Created!');
	}

	/**
	* Display the login form
	* @return View
	*/
	public function getLogin() {
		return View::make('login');
	}
}