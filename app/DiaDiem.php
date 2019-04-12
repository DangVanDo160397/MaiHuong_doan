<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaDiem extends Model
{
    // Tên bảng trong db
    protected $table = 'dia_diem';

    protected $fillable = ['ten_dia_diem','tinh_thanh','quoc_gia','chi_tiet_dia_diem'];

    public $timestamps = true;

    public function tours()
    {
    	return $this->hasMany('App\Tour','ma_dia_diem','id');
    }

}
