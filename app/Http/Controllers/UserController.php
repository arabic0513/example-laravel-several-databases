<?php

namespace App\Http\Controllers;

use App\Models\UserOne;
use App\Models\UserTwo;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $one = UserOne::all()->take(10);
        $two = UserTwo::all()->take(10);
        return view('users.index', compact('one', 'two'));
    }
}
