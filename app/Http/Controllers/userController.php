<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function getUsers() {
        $users = DB::select('select * from users');
        foreach ($users as $user) {
            echo $user->userId;
            echo " ";
            echo $user->userName;
            echo " ";
            echo $user->password;
        } 
    }
}
