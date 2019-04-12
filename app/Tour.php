<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tours';

    protected $fillable = ['ten_tour', 'hinh_anh', 'so_ngay', 'dia_diem', 'so_cho', 'gia_nguoi_lon', 'gia_tre_em', 'chi_tiet_tour', 'ma_dich_vu', 'ma_khuyen_mai','ma_dia_diem', 'loai_tour'];

    public $timestamps = true;

    public function dich_vu()
    {
    	return $this->belongsTo('App\DichVu','ma_dich_vu','id');
    }

    public function khuyen_mai()
    {
    	return $this->belongsTo('App\KhuyenMai','ma_khuyen_mai','id');
    }

    public function dia_diem()
    {
      return $this->belongsTo('App\DiaDiem','ma_dia_diem','id');
    }


    public function dat_tours()
    {
        return $this->hasMany('App\DatTour','ma_tour','id');
    }


    public function scopeSearchDiaDiem($query, $tenDiaDiem)
    {
        return $query->whereHas('dia_diem', function($q) use ($tenDiaDiem){
            $q->where('ten_dia_diem', 'LIKE', '%'.$tenDiaDiem.'%');
        });
    }
}
