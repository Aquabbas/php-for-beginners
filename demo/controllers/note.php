<?php

$config = require('config.php');
$db = new Database($config['database']);

// Controllers can: 
// 1- Accept requests from the user 
// 2- Delegate and prepare Data 
// 3- Pass the data to the viewer

$heading = 'Post';
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

require "views/note.view.php";
