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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/practice-creating', function() {

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
    $user->email = 'mike.vartanian@gmail.com';
    $user->mobile_phone = '+12482144561';
    $user->password = 'mypassword';
    $user->user_role = 'Admin';            

    # This is where the Eloquent ORM magic happens
    $user->save();

    return 'A new user has been added! Check your database to see...';

});

Route::get('/practice-reading', function() {

    # The all() method will fetch all the rows from a Model/table
    $users = User::all();

    # Make sure we have results before trying to print them...
    if($users->isEmpty() != TRUE) {

        # Typically we'd pass $books to a View, but for quick and dirty demonstration, let's just output here...
        foreach($users as $user) {
            echo $user->username.'<br>';
        }
    }
    else {
        return 'No books found';
    }

});

Route::get('/practice-reading-one-user', function() {

    $user = User::where('user_role', 'LIKE', 'Admin')->first();

    if($user) {
        return $user->username;
    }
    else {
        return 'User not found.';
    }

});

Route::get('/practice-updating', function() {

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

Route::get('/practice-deleting', function() {

    # First get a user to delete
    $user = User::where('username', 'LIKE', 'mvartani76')->first();

    # If we found the book, delete it
    if($user) {

        # Goodbye!
        $user->delete();

        return "Deletion complete; check the database to see if it worked...";

    }
    else {
        return "Can't delete - User not found.";
    }

});

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