<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Number;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\ActivityLog;
use App\Http\Controllers\Controller;
use Stevebauman\Location\Facades\Location;

class LogActivityController extends Controller
{

    public function index(Request $request)
  
    {
        $ip = request()->ip();
        $location = Location::get('103.125.39.76');
        $user = $request->header('User-Agent');
        $activity = ActivityLog::orderBy('id', 'DESC')->get();
        if ($request->ajax()) {
            $numbers = ActivityLog::orderBy('id', 'DESC')->get();
            return DataTables::of($numbers)
                ->addIndexColumn()
                ->editColumn('date', function ($number) {
                    return $number->created_at;
                })
                ->editColumn('name', function ($number) {
                    $action = $number->user->name;
                    return $action;
                })
                ->editColumn('action', function ($number) {
                    $action = explode('|', $number->description);
                    return $action[0];
                })
                ->editColumn('user_agent', function ($number) {
                    $action = explode('|', $number->description);
                    return $action[2];
                })
                ->editColumn('ip', function ($number) {
                    $action = explode('|', $number->description);
                    return $action[1];
                })
                ->editColumn('country', function ($number) {
                    $action = explode('|', $number->description);
                    return $action[3];
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.log-aktivitas', compact('activity', 'location', 'user'));
    }

   
}
