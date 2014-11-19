<?php
class UserController extends BaseController {
	/**
	*
	*/

    /**
	* Show the new user signup form
	* @return View
	*/
	public function getCreateuser() {
		return View::make('create-user');
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
		return Redirect::to('/')->with('flash_message', 'Welcome to the Financial Valuation Web Application!');
	}
	/**
	* Display the login form
	* @return View
	*/
	public function getLogin() {
		return View::make('login');
	}
	/**
	* Process the login form
	* @return View
	*/
	public function postLogin() {
		$credentials = Input::only('email', 'password');
		if (Auth::attempt($credentials, $remember = true)) {
			return Redirect::intended('/')->with('flash_message', 'Welcome Back!');
		}
		else {
			return Redirect::to('/login')
				->with('flash_message', 'Log in failed; please try again.')
				->withInput();
		}
		return Redirect::to('login');
	}
	/**
	* Logout
	* @return Redirect
	*/
	public function getLogout() {
		# Log out
		Auth::logout();
		# Send them to the homepage
		return Redirect::to('/');
	}
}