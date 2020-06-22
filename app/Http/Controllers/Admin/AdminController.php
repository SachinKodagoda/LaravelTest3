<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function __construct()
    {
        // $this->middleware('CheckEmpty'); // To check all in the grop
    }

    public function loginAdmin(){
        return view('login_admin');
    }

    public function registerAdmin(){
        return view('register_admin');
    }

    public function mainAdmin(){
        return view('main_admin');
    }
}
