<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {
        // Validation
        $this->validate($request, [
            'name'      => 'required|max:100',
            'email'     => 'required|email|unique:users',
            'username'  => 'required|max:100',
            'password'  => 'required|max:100',
        ]);

        // Record data to database
        User::create([
            'name'      => $request->input('name'),
            'email'     => $request->input('email'),
            'username'  => $request->input('username'),
            'password'  => Hash::make($request->input('password')),
        ]);

        // Automatically login after registered
        auth()->attempt($request->only('username', 'password'));

        // Redirect to admin dashboard
        return redirect()
            ->route('dashboard');
    }
}
