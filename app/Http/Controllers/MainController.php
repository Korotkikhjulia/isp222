<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id')->get();
        return view('admin.main', compact('users'));
    }
}
