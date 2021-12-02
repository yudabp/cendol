<?php

namespace App\Http\Controllers;

use App\Models\Number;
use Carbon\Carbon;
use Illuminate\Http\Request;


class DepanController extends Controller
{
    public function index(Request $request)
    {
        $numbers = Number::latest()->get()->take(1);
        $day1 = Carbon::now()->toDateString();
        $day2 = Carbon::now()->subDay(1)->toDateString();
        $day3 = Carbon::now()->subDay(2)->toDateString();
        $day4 = Carbon::now()->subDay(3)->toDateString();
        $day5 = Carbon::now()->subDay(4)->toDateString();
        $day6 = Carbon::now()->subDay(5)->toDateString();
        $day7 = Carbon::now()->subDay(6)->toDateString();

        $number1 = Number::select('no_satu')->where('tanggal', '=', $day1)->get()->take(4);
        $number2 = Number::select('no_satu')->where('tanggal', '=', $day2)->get()->take(4);
        $number3 = Number::select('no_satu')->where('tanggal', '=', $day3)->get()->take(4);
        $number4 = Number::select('no_satu')->where('tanggal', '=', $day4)->get()->take(4);
        $number5 = Number::select('no_satu')->where('tanggal', '=', $day5)->get()->take(4);
        $number6 = Number::select('no_satu')->where('tanggal', '=', $day6)->get()->take(4);
        $number7 = Number::select('no_satu')->where('tanggal', '=', $day7)->get()->take(4);


        $numberImg = Number::where('tanggal', '=', $day1)->orderByDesc('waktu')->get()->take(1);
        $numberImgBackup = Number::orderByDesc('tanggal')->orderByDesc('waktu')->get()->take(1);
        if ($numberImg->count() <= 0 && $numberImgBackup->count() <= 0) {
            $arr1 = false;
            $arr2 = false;
            $arr3 = false;
            $waktu = "Morning";
            $date = Carbon::Now()->toDateString();
       }else if ($numberImg->count() > 0) {
            $arr1 = str_split(strval($numberImg[0]->no_satu));
            $arr2 = str_split(strval($numberImg[0]->no_dua));
            $arr3 = str_split(strval($numberImg[0]->no_tiga));
            $date = $numberImg[0]->tanggal;
            if ($numberImg[0]->waktu == "07:00:00") {
                $waktu = "Morning";
            } else if ($numberImg[0]->waktu == "12:00:00") {
                $waktu = "Midday";
            } else if ($numberImg[0]->waktu == "17:00:00") {
                $waktu = "Evening";
            } else if ($numberImg[0]->waktu == "21:00:00") {
                $waktu = "Night";
            } else {
                $waktu = "-";
            }
        } else {
            $arr1 = str_split(strval($numberImgBackup[0]->no_satu));
            $arr2 = str_split(strval($numberImgBackup[0]->no_dua));
            $arr3 = str_split(strval($numberImgBackup[0]->no_tiga));
            $date = $numberImgBackup[0]->tanggal;
            if ($numberImgBackup[0]->waktu == "07:00:00") {
                $waktu = "Morning";
            } else if ($numberImgBackup[0]->waktu == "12:00:00") {
                $waktu = "Day";
            } else if ($numberImgBackup[0]->waktu == "17:00:00") {
                $waktu = "Evening";
            } else if ($numberImgBackup[0]->waktu == "21:00:00") {
                $waktu = "Night";
            } else {
                $waktu = "-";
            }
        }



        return  view('index', compact('waktu', 'date', 'numbers', 'number1', 'number2', 'number3', 'number4', 'number5', 'number6', 'number7', 'arr1', 'arr2', 'arr3', 'day1', 'day2', 'day3', 'day4', 'day5', 'day6', 'day7'));
    }
}
