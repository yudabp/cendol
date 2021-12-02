<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Number;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\ActivityLog;
use Stevebauman\Location\Facades\Location;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $numbers = Number::orderByDesc('tanggal')->get();
            return DataTables::of($numbers)
                ->addIndexColumn()
                ->editColumn('tanggal', function (Number $number) {
                    return date('d-m-Y', strtotime($number->tanggal));
                })
                ->editColumn('waktu', function (Number $number) {
                    return date('h:i A', strtotime($number->waktu));
                })
                ->addColumn('action', function ($data) {
                    $button = '<button type="button" id="' . $data->id . '" class="edit btn btn-sm shadow-sm btn-primary btn-sm">Edit</button>';
                    $button .= '&nbsp;&nbsp;&nbsp;<button type="button" onclick="deleteConfirmation(' . $data->id . ')" class="delete btn btn-sm shadow-sm btn-danger btn-sm">Delete</button>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.index');
    }

    public function store(Request $request)
    {
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

        activity()->log('Menambah Angka | '. request()->ip() .' | '. $request->header('User-Agent') .' | '. Location::get('103.125.39.76')->countryName);

        // Redirect
        return response()
            ->json([
                'success'   => 'Data Added.'
            ]);
    }

    public function edit($id)
    {
        $number = Number::find($id);


        return response()
            ->json([
                'number'    => $number
            ]);
    }

    public function update(Request $request)
    {
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
        Number::whereId($request->input('hidden_id'))->update([
            'tanggal'   => date('Y-m-d', strtotime($request->input('tanggal'))),
            'waktu'     => $request->input('waktu'),
            'no_satu'   => $request->input('no_satu'),
            'no_dua'    => $request->input('no_dua'),
            'no_tiga'   => $request->input('no_tiga')
        ]);

        activity()->log('Mengedit Angka | '. request()->ip() .' | '. $request->header('User-Agent') .' | '. Location::get('103.125.39.76')->countryName);

        // Redirect
        return response()
            ->json([
                'success'   => 'Data Updated.'
            ]);
    }

    public function delete($id, Request $request )
    {
        $data = Number::where('id', $id)->first()->delete();
        // check data deleted or not
        if ($data == 1) {
            $success = true;
            $message = "Data deleted successfully";
        } else {
            $success = true;
            $message = "Data not found";
        }

        $activity = activity()->log('Menghapus Angka | '. request()->ip() .' | '. $request->header('User-Agent') .' | '. Location::get('103.125.39.76')->countryName);

        if(!$activity){
            return false;
        }

        //  Return response
        return response()
            ->json([
                'success' => $success,
                'message' => $message,
            ]);
    }
}
