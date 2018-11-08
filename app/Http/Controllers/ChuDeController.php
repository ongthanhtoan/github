<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChuDe;
use DB;
class ChuDeController extends Controller
{
    public function index()
    {
    	$ds_chude = DB::table('chude')->get();
    	return view('chude.index')->with('danhsachchude', $ds_chude);
    }
}
