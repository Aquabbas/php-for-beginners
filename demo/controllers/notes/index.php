<?php

$config = require('config.php');
$db = new Database($config['database']);

// Controllers can: 
// 1- Accept requests from the user 
// 2- Delegate and prepare Data 
// 3- Pass the data to the viewer

$heading = 'My Posts';

$notes = $db->query('SELECT * FROM notes WHERE user_id = 1')->get();

// dd($notes);

require "views/notes/index.view.php";
