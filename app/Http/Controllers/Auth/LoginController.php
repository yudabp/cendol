<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function store(Request $request) {
        // Validation
        $this->validate($request, [
            'username'  => 'required',
            'password'  => 'required'
        ]);

        // Check login
        // if fails
        if (!auth()->attempt($request->only('username', 'password'))) {
            return back()
                ->with('status', 'Username or Password wrong.');
        }

        // if success redirect to admin dashboard
        return redirect()
            ->route('dashboard');
    }
}
