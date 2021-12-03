<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function getUsers() {
        $data = User::all();
        return view('pages.welcome', compact('data'));
    }
}
