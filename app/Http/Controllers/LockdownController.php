<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LockdownController extends Controller
{
    public function getLogin(){
        return view('login');
    }
}
