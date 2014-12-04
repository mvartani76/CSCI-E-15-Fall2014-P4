<?php
class IndexController extends BaseController {
	public function getIndex() {
		return View::make('index');
	}

	/**
	* Process the login form
	* @return View
	*/
	public function postIndex() {
		$credentials = Input::only('email', 'password');
		$remember_me = Input::get('remember_me');
		if (Auth::attempt($credentials, $remember_me)) {
			return Redirect::intended('/user-dashboard/{id}')->with('flash_message', 'Welcome Back!');
		}
		else {
			return Redirect::to('/')
				->with('flash_message', 'Log in failed; please try again.')
				->withInput();
		}
		return Redirect::to('/user-dashboard/{id}');
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