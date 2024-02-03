<?php

require('functions.php');
// require('router.php');
require('Database.php');

$config = require('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];

// Question Mark Method
// $query = "SELECT * FROM posts WHERE id = ?";
// $posts = $db->query($query, [$id])->fetch();

// Key Value Parameter Method
$query = "SELECT * FROM posts WHERE id = :id";
$posts = $db->query($query, [':id' => $id])->fetch();

dd($posts);

// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }
