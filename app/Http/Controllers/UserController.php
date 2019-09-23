<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public static function index() {
        return User::paginate(4);
    }

    public static function showAllExceptMyself() {
        return User::where('id', '!=', Auth::id())->paginate(4);
    }
}
