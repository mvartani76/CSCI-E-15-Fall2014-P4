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


Route::get('/user-dashboard', function() {
        return View::make('user-dashboard');
    });


Route::get('/practice-creating-user', function() {

    # Instantiate a new Book model class
    $user = new User();

    # Set 
    $user->first_name = 'Mike';
    $user->last_name = 'Vartanian';
    $user->company_name = 'Contextual Lab Solutions';
    $user->username = 'mvartani76';
    $user->address_1 = '3341 Timberlake Drive';
    $user->address_2 = '';
    $user->city = 'Commerce Township';
    $user->state = 'Michigan';
    $user->zip_code = '48390';
    $user->country = 'United States';
    $user->email = 'mike.vartanian@gmail.com';
    $user->mobile_phone = '+12482144561';
    $user->password = 'mypassword';

    # This is where the Eloquent ORM magic happens
    $user->save();

    return 'A new user has been added! Check your database to see...';

});

Route::get('/practice-reading-user', function() {

    # The all() method will fetch all the rows from a Model/table
    $users = User::all();

    # Make sure we have results before trying to print them...
    if($users->isEmpty() != TRUE) {

        # Typically we'd pass $users to a View, but for quick and dirty demonstration, let's just output here...
        foreach($users as $user) {
            echo $user->username.'<br>';
        }
    }
    else {
        return 'No users found';
    }

});

Route::get('/practice-reading-one-user', function() {

    $user = User::where('permission_id', 'LIKE', '1')->first();

    if($user) {
        echo $user->username.'<br>';
        echo $user->permission->p_view;
    }
    else {
        return 'User not found.';
    }

});

Route::get('/practice-updating-user', function() {

    # First get a user to update
    $user = User::where('username', 'LIKE', 'mvartani76')->first();

    # If we found the user, update it
    if($user) {

        # Give it a different password
        $user->password = 'mynewpasswd';

        # Save the changes
        $user->save();

        return "Update complete; check the database to see if your update worked...";
    }
    else {
        return "User not found, can't update.";
    }

});

Route::get('/practice-deleting-user', function() {

    # First get a user to delete
    $user = User::where('username', 'LIKE', 'mvartani76')->first();

    # If we found the user, delete it
    if($user) {

        # Goodbye!
        $user->delete();

        return "Deletion complete; check the database to see if it worked...";

    }
    else {
        return "Can't delete - User not found.";
    }

});

Route::get('/practice-creating-permission', function() {

    # Instantiate a new Book model class
    $permission = new Permission();

    # Set 
    $permission->permission_level = 'Admin';
    $permission->p_view = TRUE;
    $permission->p_add = TRUE;
    $permission->p_update = TRUE;
    $permission->p_delete = TRUE;
    $permission->p_approve = TRUE;
    $permission->p_customize = TRUE;

    # This is where the Eloquent ORM magic happens
    $permission->save();

    return 'A new permission has been added! Check your database to see...';

});

Route::get('/create-permission', function() {
    return View::make('create-permission');
});
// Process form for a new permission
Route::post('/create-permission', array('before'=>'csrf',

    function() {

    $permission = new Permission();
    $permission->permission_level = Input::get('permission_level');
    $permission->p_view = Input::get('p_view');
    $permission->p_add = Input::get('p_add');
    $permission->p_update = Input::get('p_update');
    $permission->p_delete = Input::get('p_delete');
    $permission->p_approve = Input::get('p_approve');
    $permission->p_customize = Input::get('p_customize');
    
    $permission->save();
    return 'Your permission was created';

}));

Route::get('/create-project', function() {
    return View::make('create-project');
});
// Process form for a new project
Route::post('/create-project', array('before'=>'csrf',

    function() {

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
    
    $project->save();
    return 'Your Project was created';

}));


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
