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
Route::post('/', ['before' => 'csrf', 'uses' => 'IndexController@postIndex'] );
Route::get('/logout', ['before' => 'auth', 'uses' => 'IndexController@getLogout'] );

// Display the form for a new user
// Using a controller to show this form as well as additional logic/validation
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
Route::delete('/edit-project/{uid}/{pid}/{rid}', 'ProjectController@deleterevenue');
Route::delete('/edit-project/{uid}/{pid}/{rid}', 'ProjectController@deleteexpense');

/* Comment Related Routes */
Route::get('/create-comment/{id}', 'CommentController@getCreatecomment');
Route::post('/create-comment/{id}', 'CommentController@postCreatecomment');
Route::get('/user-comment/{id}', 'UserController@getUsercomment');
Route::delete('/user-comment/{uid}/{cid}', 'CommentController@deletecomment');


Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
