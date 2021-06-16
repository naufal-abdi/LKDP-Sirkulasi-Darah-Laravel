<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Pengguna;

use Validator;
use Auth;
use Hash;

class PenggunaAuthController extends Controller
{
    //
    function index()
		{
			if (Auth::guard('pengguna')->check()){
				return redirect('admin/');
			} else {
				$title = 'Halaman Login';
				return view('auth.login', compact('title'));
			}
		}

		function auth(Request $request)
		{
			$validator = Validator::make($request->all(), [
				'email'		=> 'required|email',
				'password'	=> 'required'
			]);

			if ($validator->fails()){
				return redirect('/');
			}

			$checkAccount = Pengguna::check($request->email);

			if (!$checkAccount) {
				return "Mohon Maaf Akun Anda tidak terdaftar";
			}

			$credentials = Auth::guard('pengguna')->attempt([
				'email' => $request->email, 
				'password' => $request->password
			]);

			if ($credentials) {
				$pengguna = Auth::guard('pengguna')->user();
				if ($pengguna->hak_akses == 1){
					return redirect('admin')->with('success', 'Selamat Datang');
				}
			} else {
				return 'Terjadi Kesalahan';
			}
		}

		function logout()
		{
			Auth::guard('pengguna')->logout();
			return redirect('/')->with('success', 'Sampai Jumpa');
		}
}
