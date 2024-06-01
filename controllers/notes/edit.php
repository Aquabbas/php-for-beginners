<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

view("notes/edit.view.php", [
    'heading' => 'Edit Note',
    'errors' => [],
    'note' => $note,
]);



/** 
 * Controllers can:
 * ---------------------------------
 * 1- Accept requests from the user
 * 2- Delegate and prepare Data 
 * 3- Pass the data to the viewer
 * ---------------------------------
 * */
