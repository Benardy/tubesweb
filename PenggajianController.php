<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggajianController extends Controller
{
    public function index(){
    	return view('penggajian.index');
    }

    public function jabatan(){
    	$jabatan = DB::table('jabatan')->get();
    	return view('penggajian.jabatan', ['jabatan' => $jabatan]);
    }

    public function lembur(){
    	$lembur = DB::table('lembur')->get();
    	return view('penggajian.lembur', ['lembur' => $lembur]);
    }

    public function potongan(){
    	$potongan = DB::table('potongan')->get();
    	return view('penggajian.potongan', ['potongan' => $potongan]);
    }
}
