<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

// dd($_SERVER);
$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

view("notes/show.view.php", [
    'heading' => 'Post',
    'note' => $note
]);

/** 
 * Controllers can:
 * ---------------------------------
 * 1- Accept requests from the user
 * 2- Delegate and prepare Data 
 * 3- Pass the data to the viewer
 * ---------------------------------
 * */
