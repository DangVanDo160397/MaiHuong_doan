<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    //
    protected $table = 'khuyen_mai';

    protected $fillable = ['id','gia_KM', 'chi_tiet_KM'];

    public $timestamps = true;

    public function tours()
    {
    	return $this->hasMany('App\Tour','ma_khuyen_mai','id');
    }

    public function dat_tours()
    {
    	return $this->hasManyThrough('App\DatTour','App\Tour','ma_khuyen_mai','ma_tour','id');
    }
}
