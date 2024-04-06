<?php

use Core\App;
use Core\Database;

// $db = App::Container()->resolve('Core\Database');
$db = App::resolve(Database::class);

$currentUserId = 1;

// Form was submitted. Delete the current note.
$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$db->query('delete from notes where id = :id', [
    'id' => $_GET['id']
]);

header('location: /notes');
die();

/** 
 * Controllers can:
 * ---------------------------------
 * 1- Accept requests from the user
 * 2- Delegate and prepare Data 
 * 3- Pass the data to the viewer
 * ---------------------------------
 * */
