<?php

namespace App\Http\Controllers;

use App\Models\Number;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DashboardController extends Controller
{
    public function index(Request $request) {
        if ($request->ajax()) {
            $numbers = Number::latest()->get();
            return DataTables::of($numbers)
                ->addIndexColumn()
                ->editColumn('tanggal', function (Number $number) {
                    return date('d-m-Y', strtotime($number->tanggal));
                })
                ->addColumn('action', function ($data) {
                    $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-sm shadow-sm btn-primary btn-sm">Edit</button>';
                    $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="delete btn btn-sm shadow-sm btn-danger btn-sm">Delete</button>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.index');
    }

    public function store(Request $request) {
        // Ajax Validations

        // Record into database

        // Redirect
    }
}
