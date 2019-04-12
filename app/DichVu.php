<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DichVu extends Model
{
    //
    protected $table = 'Dich_Vu';

    protected $fillable = ['ten_dich_vu', 'gia_dich_vu', 'chi_tiet_dich_vu'];

    public $timestamps = true;

    public function tours()
    {
    	return $this->hasMany('App\Tour','ma_dich_vu','id');
    }

    public function dat_tours()
    {
    	return $this->hasManyThrough('App\DatTour','App\Tour','ma_dich_vu','ma_tour','id');
    }
}
