<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request) {
        $incomingFields = $request->validate([
            'email'=> ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'=> ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);

        User::create($incomingFields);
        return "hello!";
    }
}
