<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
		function index(){
			$title = 'Dashboard Admin';
			return view('admin.dashboard', compact('title'));
			// return "Selamat Datang <a href=". url('logout') .">Keluar</a>";
		}
}
