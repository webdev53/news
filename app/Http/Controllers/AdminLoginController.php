<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;
use App\Mail\Websitemail;
use Hash;
use Auth;

class AdminLoginController extends Controller
{
    public function index(){
      $pass = Hash::make('1234');


      return view('admin.login');
    }

    public function forget_password(){
      return view('admin.forget_password');
    }
}
