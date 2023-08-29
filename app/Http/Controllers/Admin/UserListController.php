<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserListController extends Controller
{
    public function index(){
        $userList = User::all();
 
         return view('admin.userslist.userlist', compact('userList'));
     }
}