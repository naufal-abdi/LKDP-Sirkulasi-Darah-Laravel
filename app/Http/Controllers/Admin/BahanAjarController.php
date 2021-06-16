<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BahanAjarController extends Controller
{
    //
		function index(){
			return view('admin.bahan-ajar.index');
		}

		function add(){
			return view('admin.bahan-ajar.add');
		}
}
