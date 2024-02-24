<?php

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

$id = $_GET['id'];

$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $id
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

// if ($note['user_id'] !== $currentUserId) {
//     abort(Response::FORBIDDEN);
// }

// dd($notes);

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
