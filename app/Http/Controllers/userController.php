<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;

class userController extends Controller
{
    public function getUsers() {
        $data = Users::all();
        return view('pages.welcome', compact('data'));
    }
}
