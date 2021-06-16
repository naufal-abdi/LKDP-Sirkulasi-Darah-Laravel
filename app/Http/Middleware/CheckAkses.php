<?php

namespace App\Http\Middleware;

use App\Model\Pengguna;

use Auth;
use Closure;

class CheckAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
			$check = $this->checkAksesPengguna($request);

			if ($check['status']) {
				return $next($request);
			}

			// jika hak akses yg dimiliki tidak sesuai dengan route group
			// maka member akan diarahkan kembali ke halamanya 
			return redirect($check['page']);
			// return abort(503, 'Anda Tidak Memiliki Hak Akses');
    }

		private function checkAksesPengguna($request)
		{
			$dataAuth = Auth::guard('pengguna')->user();
			$pengguna = Pengguna::where('email', $dataAuth->email)->first();
			$actions = $request->route()->getAction();

			$result = [];
			$result['page'] = 'murid';

			switch($pengguna->hak_akses){
				case 1:
					$result['page'] = 'admin';
					break;
				case 2:
					$result['page'] = 'guru';
					break;
				case 3:
					$result['page'] = 'murid';
					break;
			}

			$result['status'] = false;
			if ($pengguna->hak_akses == $actions['roles']) $result['status'] = true;

			return $result;
		}
}
