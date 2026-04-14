<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ["name" => "john doe", "email" => "john.doe@example.com"],
            ["name" => "john smith", "email" => "john.smith@example.com"],
            ["name" => "oussama", "email" => "archimed@archimed.com"]

        ];

        return response()->json($users);
    }
}
