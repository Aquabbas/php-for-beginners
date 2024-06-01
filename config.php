<?php

return [
    'database' => [
        'host' => 'host.docker.internal', // Use the service name defined in docker-compose.yml
        'port' => 3306,
        'dbname' => 'myapp',
        'charset' => 'utf8mb4',
        'username' => 'root', // Add the username
        'password' => '' // Add the password
    ]
];
