<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'so_dien_thoai', 'dia_chi', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public $timestamps = true;

    public function dat_tours()
    {
        return $this->hasMany('App\DatTour','ma_tai_khoan','id');
    }

    public function setPasswordAttribute($value){
		$this->attributes['password'] = bcrypt($value);
	}
}
