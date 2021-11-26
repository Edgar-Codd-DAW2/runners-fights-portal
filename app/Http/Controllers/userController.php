<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function getUsers() {
        $data = DB::select('select * from users');
        return view('pages.welcome', compact('data'));
    }
}
