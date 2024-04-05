<?php

use Core\Database;

// Initialize database
$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

// Before retrieving the note from the database
// var_dump($_GET['id']); // Check if the ID is correctly received

// Form was submitted. Delete the current note.
$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_GET['id']
])->findOrFail();

// After retrieving the note
// var_dump($note); // Check the retrieved note

authorize($note['user_id'] === $currentUserId);

// Before executing the delete query
// var_dump('Deleting note...');

$db->query('delete from notes where id = :id', [
    'id' => $_GET['id']
]);

// After executing the delete query
// var_dump('Note deleted successfully');

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
