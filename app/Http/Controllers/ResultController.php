<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Number;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ResultController extends Controller
{
    public function index(Request $request)
    {
        $date = Carbon::now()->toDateString();

        if ($request->ajax()) {
            $numbers = Number::orderBy('tanggal', 'DESC')->get();
            return DataTables::of($numbers)
                ->addIndexColumn()
                ->editColumn('tanggal', function (Number $number) {
                    return date('d-m-Y', strtotime($number->tanggal));
                })
                ->editColumn('waktu', function (Number $number) {
                    return date('h:i A', strtotime($number->waktu));
                })
                ->make(true);
        }

        return view('pages.result');
    }
}
