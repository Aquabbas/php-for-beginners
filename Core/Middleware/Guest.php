<?php

namespace Core\Middleware;

class Guest
{
    public function handle()
    {
        // If there is user, then kick out the guest
        if ($_SESSION['user'] ?? false) {
            header('location: /');
            exit();
        }
    }
}
