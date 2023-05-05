<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
    public function index() {
        return view('editprofile');
    }

    public function listuser() {

        $users = User::paginate(10);
        return view('user', [
            'users' => $users,
        ]);
    }
}
