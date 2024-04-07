<?php

// Stactic Pages
$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

// Routes related to Notes
$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->delete('/note', 'controllers/notes/destroy.php');
$router->post('/note', 'controllers/notes/destroy.php'); // Handle POST requests for deleting a note

$router->get('/note/edit', 'controllers/notes/edit.php');
$router->patch('/note/edit', 'controllers/notes/update.php');
$router->post('/note/edit', 'controllers/notes/update.php');

$router->get('/notes/create', 'controllers/notes/create.php');
$router->post('/notes', 'controllers/notes/store.php');
