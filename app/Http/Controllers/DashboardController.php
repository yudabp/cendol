<?php

namespace App\Http\Controllers;

use Validator;
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
        $rules = [
            'tanggal'   => 'required',
            'waktu'     => 'required',
            'no_satu'   => 'required',
            'no_dua'    => 'required',
            'no_tiga'   => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, [
            'tanggal.required'  => 'Tanggal harus diisi',
            'waktu.required'    => 'Waktu harus diisi',
            'no_satu.required'  => '1st Place harus diisi',
            'no_dua.required'   => '2nd Place harus diisi',
            'no_tiga.required'  => '3rd Place harus diisi',
        ]);

        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all()
                ]);
        }

        // Record into database
        Number::create([
            'tanggal'   => date('Y-m-d', strtotime($request->input('tanggal'))),
            'waktu'     => $request->input('waktu'),
            'no_satu'   => $request->input('no_satu'),
            'no_dua'    => $request->input('no_dua'),
            'no_tiga'   => $request->input('no_tiga')
        ]);

        // Redirect
        return response()
            ->json([
                'success'   => 'Data Added.'
            ]);
    }
}
