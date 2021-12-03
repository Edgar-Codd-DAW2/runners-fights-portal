<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class userController extends Controller
{
    public function getUsers() {
        $data = User::all();
        return view('pages.welcome', compact('data'));
    }
}
