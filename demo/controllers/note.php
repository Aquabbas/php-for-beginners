<?php

$config = require('config.php');
$db = new Database($config['database']);

// Controllers can: 
// 1- Accept requests from the user 
// 2- Delegate and prepare Data 
// 3- Pass the data to the viewer

$heading = 'Post';

$id = $_GET['id'];

$note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $id])->fetch();

// dd($notes);

require "views/note.view.php";
