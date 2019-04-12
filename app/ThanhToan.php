<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThanhToan extends Model
{
    //
    protected $table = 'Thanh_Toan';

    protected $fillable = ['loai_thanh_toan', 'ten_hop_dong', 'chi_tiet_hop_dong'];

    public $timestamps = true;

     public function dat_tours()
    {
    	return $this->hasMany('App\DatTour','ma_thanh_toan','id');
    }
}
