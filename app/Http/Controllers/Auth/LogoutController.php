<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ActivityLog;
use Stevebauman\Location\Facades\Location;

class LogoutController extends Controller
{
    public function store(Request $request) {
        // dd(Location::get('127.0.0.1')->countryName);
        $ip = request()->ip();
        if ($ip == '127.0.0.1') {
            activity()->log('Logout | '. $ip .' | '. $request->header('User-Agent') .' | '. Location::get('103.125.39.76')->countryName);
        }else {
            activity()->log('Logout | '. $ip .' | '. $request->header('User-Agent') .' | '. Location::get($ip)->countryName);
        }

        auth()->logout();

        return redirect()
            ->route('login');
    }
}
