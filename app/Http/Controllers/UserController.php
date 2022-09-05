<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::sortable('last_name')->paginate(16);
        return view('users.index', compact('users'));
    }
}
