<?php

namespace Core\Middleware;

class Guest
{
    public function handle()
    {
        // If there is user, then kick out the guest
        if (isset($_SESSION['user'])) {
            header('location: /');
            exit();
        }
    }
}
