<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    
    public function admin_index()
    {
        return view('admin.products.users')
        ->with('users', User::all())
        ;
    }
}
