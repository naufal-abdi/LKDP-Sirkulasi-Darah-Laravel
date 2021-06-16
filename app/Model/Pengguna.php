<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Pengguna extends Model implements AuthenticatableContract
{
    //
    use Authenticatable;
    protected $guard = 'pengguna';
    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';

		protected $fillable = [
			'email', 'password', 'password_text', 'hak_akses'
		];

		protected $hidden = [ 'password' ];

		public function getCreatedAtAttribute(){
			return \Carbon\Carbon::parse($this->attributes['created_at'])
					->format('d-m-Y H:i');
		}
	
		public function getUpdatedAtAttribute(){
			if ($this->attributes['updated_at']==null){
				return "-"; 
			} else {
				$tgl = \Carbon\Carbon::parse($this->attributes['updated_at'])
				->format('d-m-Y H:i');
				return $tgl ;
			}			
		}

		public static function check($email){
			$check = Pengguna::where('email', $email)->first();

			if ($check){
				return true;
			}

			return false;
		}

}
