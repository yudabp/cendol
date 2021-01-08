<?php

namespace App\Http\Controllers\Auth;

use Validator;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function index() {
        return view('admin.setting');
    }

    public function update(Request $request) {
        // Ajax Validations
        $this->validate($request, [
            'password' => 'required|max:100',
        ], [
            'password.required' => 'Kolom password harus diisi.'
        ]);

        User::whereId($request->id)->update([
            'password'  => Hash::make($request->input('password'))
        ]);

        return redirect()
            ->route('dashboard')
            ->with('status', 'Password telah diganti');
    }
}
