<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUsers() {
        return User::all();
    }

    public function getUser($user_id)
    {
        $users = User::where('id', $user_id)->get();
        return $users;
    }
}
