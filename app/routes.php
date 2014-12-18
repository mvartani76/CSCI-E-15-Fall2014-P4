<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Use a controller to get the Index logic */
Route::get('/', 'IndexController@getIndex');

// Display the form for a new user
// Using a controller to show this form as well as additional logic/validation
Route::get('/user-login', 'UserController@getUserlogin');
Route::post('/user-login', 'UserController@postUserlogin' );
Route::get('/logout', ['before' => 'auth', 'uses' => 'IndexController@getLogout'] );

Route::get('/create-user', 'UserController@getCreateuser');
Route::post('/create-user', ['before' => 'csrf', 'uses' => 'UserController@postCreateuser'] );
Route::get('/edit-user/{id}', 'UserController@getEdituser');
Route::get('/user-dashboard/{id}', 'UserController@getUserdashboard');
Route::get('/user-project/{id}', 'UserController@getUserproject');
Route::delete('/user-project/{uid}/{pid}', 'UserController@deleteUserproject');
Route::get('/user-admin', function() {

        $users = User::all();
        return View::make('user-admin',['users' => $users]);
    });

/* Project Related Routes */
Route::get('/create-project/{id}', 'ProjectController@getCreateproject');
Route::post('/create-project/{id}', ['before' => 'csrf', 'uses' => 'ProjectController@postCreateproject'] );
Route::get('/edit-project/{uid}/{pid}', 'ProjectController@getEditproject');
Route::post('/edit-project/{uid}/{pid}', 'ProjectController@postEditproject');
Route::get('/add-revenue/{uid}/{pid}', 'ProjectController@getAddrevenue');
Route::post('/add-revenue/{uid}/{pid}', 'ProjectController@postAddrevenue');
Route::get('/add-expense/{uid}/{pid}', 'ProjectController@getAddexpense');
Route::post('/add-expense/{uid}/{pid}', 'ProjectController@postAddexpense');
Route::get('/edit-revenue/{uid}/{pid}/{rid}', 'ProjectController@getEditrevenue');
Route::post('/edit-revenue/{uid}/{pid}/{rid}', 'ProjectController@postEditrevenue');
Route::get('/edit-expense/{uid}/{pid}/{eid}', 'ProjectController@getEditexpense');
Route::post('/edit-expense/{uid}/{pid}/{eid}', 'ProjectController@postEditexpense');
Route::delete('/edit-project/{uid}/{pid}/{rid}/1', 'ProjectController@deleterevenue');
Route::delete('/edit-project/{uid}/{pid}/{eid}/2', 'ProjectController@deleteexpense');
Route::get('/view-project/{uid}/{pid}', 'ProjectController@getViewproject');

/* Comment Related Routes */
Route::get('/create-comment/{id}', 'CommentController@getCreatecomment');
Route::post('/create-comment/{id}', 'CommentController@postCreatecomment');
Route::get('/user-comment/{id}', 'UserController@getUsercomment');
Route::delete('/user-comment/{uid}/{cid}', 'CommentController@deletecomment');

