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

	public function getAddrevenue($uid,$pid) {
		$project = Project::find($pid);
		$user = Auth::user();
		return View::make('/add-revenue',['user' => $user],['project' => $project])->withOnly('project');
	}

	// Process form for a new revenue
	public function postAddrevenue($uid, $pid) {

		$user = Auth::user();
		$project = Project::find($pid);

		# Step 1) Define the rules
		$rules = array(
			'revenue_description' => 'required',
			'revenuetype' => 'required',
			'amount' => 'required',
			'year' => 'required'
		);
		# Step 2)
		$validator = Validator::make(Input::all(), $rules);
		# Step 3
		if($validator->fails()) {
			return Redirect::to('/add-revenue/'.$user->id.'/'.$project->id)
				->with('flash_message', 'Add revenue failed; please fix the errors listed below.')
				->with('flash_type', 'alert-danger')
				->withInput()
				->withErrors($validator);
		}
    
	    $revenue = new Revenue();
	    $revenue->revenue_description = Input::get('revenue_description');
	    $revenue->amount = Input::get('amount');
	    $revenue->year = Input::get('year');
	    # Need to add 1 to revenue type as result is base 0
		$revenue2 = Input::get('revenuetype')+1;
		echo $revenue2;	    
	    try {
	    	$revenue->save();
			$revenue->revenuetypes()->attach($revenue2);
			$revenue->save();
			$project->revenues()->attach($revenue->id);
			$project->save();
		}
		catch (Exception $e) {
			return Redirect::to('/add-revenue/'.$user->id.'/'.$project->id)
				->with('flash_message', 'Add Revenue failed; please try again.')
				->with('flash_type', 'alert-danger')
				->withInput();
		}

		return Redirect::to('/add-revenue/'.$user->id.'/'.$project->id)->with('flash_message', 'Revenue added Successfully!');		
	}

	public function getEditrevenue($uid,$pid,$rid) {
		$project = Project::find($pid);
		$user = Auth::user();
		$revenue = Revenue::find($rid);
		$revenuetype = Revenue_type::all();
		return View::make('/edit-revenue',['user' => $user,'project' => $project,'revenue' => $revenue,'revenuetype' => $revenuetype])->withOnly('revenue');
	}

	public function getAddexpense($uid,$pid) {
		$project = Project::find($pid);
		$user = Auth::user();
		return View::make('/add-expense',['user' => $user],['project' => $project])->withOnly('project');
	}

	// Process form for a new expense
	public function postAddexpense($uid, $pid) {

		$user = Auth::user();
		$project = Project::find($pid);

		# Step 1) Define the rules
		$rules = array(
			'expense_description' => 'required',
			'expensetype' => 'required',
			'amount' => 'required',
			'year' => 'required'
		);
		# Step 2)
		$validator = Validator::make(Input::all(), $rules);
		# Step 3
		if($validator->fails()) {
			return Redirect::to('/add-expense/'.$user->id.'/'.$project->id)
				->with('flash_message', 'Add expense failed; please fix the errors listed below.')
				->with('flash_type', 'alert-danger')
				->withInput()
				->withErrors($validator);
		}
    
	    $expense = new Expense();
	    $expense->expense_description = Input::get('expense_description');
	    $expense->amount = Input::get('amount');
	    $expense->year = Input::get('year');
	    # Need to add 1 to expense type as result is base 0
		$expense2 = Input::get('expensetype')+1;
	    try {
	    	$expense->save();
			$expense->expensetypes()->attach($expense2);
			$expense->save();
			$project->expenses()->attach($expense->id);
			$project->save();
		}
		catch (Exception $e) {
			return Redirect::to('/add-expense/'.$user->id.'/'.$project->id)
				->with('flash_message', 'Add Expense failed; please try again.')
				->with('flash_type', 'alert-danger')
				->withInput();
		}

		return Redirect::to('/add-expense/'.$user->id.'/'.$project->id)->with('flash_message', 'Expense added Successfully!');		
	}

	public function getEditexpense($uid,$pid,$eid) {
		$project = Project::find($pid);
		$user = Auth::user();
		$expense = Expense::find($eid);
		$expensetype = Expense_type::all();
		return View::make('/edit-expense',['user' => $user,'project' => $project,'expense' => $expense,'expensetype' => $expensetype])->withOnly('expense');
	}

	// Process form to delete revenue line item
	public function deleteRevenue($uid,$pid,$rid) {

		$user = Auth::user();
		$project = Project::findOrFail($pid);
		
		try {
	        $revenue = Revenue::findOrFail($rid);

	    }
	    catch(exception $e) {
	        return Redirect::to('/edit-project/'.$user->id.'/'.$project->id)->with('flash_message', 'Could not delete revenue '. $rid .' - not found.')
	        													->withInput();
	    }

	    Revenue::destroy($rid);
		return Redirect::to('/edit-project/'.$user->id.'/'.$project->id)->with('flash_message', 'Revenue deleted.');
	    
	}

	// Process form to delete expense line item
	public function deleteExpense($uid,$pid,$eid) {

		$user = Auth::user();
		$project = Project::findOrFail($pid);
		
		try {
	        $expense = Expense::findOrFail($eid);

	    }
	    catch(exception $e) {
	        return Redirect::to('/edit-project/'.$user->id.'/'.$project->id)->with('flash_message', 'Could not delete expense '. $eid .' - not found.')
	        													->withInput();
	    }

	    Expense::destroy($eid);
		return Redirect::to('/edit-project/'.$user->id.'/'.$project->id)->with('flash_message', 'Expense deleted.');
	}


}