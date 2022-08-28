<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function index(){
        return view('index');
    }
    function userList(){
        $user = User::orderBy('id', 'DESC')->get();
        return view('userList',compact('user'));
    }
   
}
