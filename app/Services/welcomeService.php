<?php

namespace App\Services;

class WelcomeService
{
    public function greet($name)
    {
        $hour = now()->hour;
        if ($hour < 12) {
            $greeting = "Bonjour";
        } elseif ($hour < 18) {
            // Added the missing accent for "après-midi" just for style!
            $greeting = "Bon après-midi";
        } else {
            $greeting = "Bonsoir";
        }
        return "$greeting, $name!";
    }
}
