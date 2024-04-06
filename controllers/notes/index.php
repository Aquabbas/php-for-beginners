<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$notes = $db->query('SELECT * FROM notes WHERE user_id = 1')->get();

// dd($notes);

view("notes/index.view.php", [
    'heading' => 'My Posts',
    'notes' => $notes
]);



/** 
 * Controllers can:
 * ---------------------------------
 * 1- Accept requests from the user
 * 2- Delegate and prepare Data 
 * 3- Pass the data to the viewer
 * ---------------------------------
 * */
