<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatTour extends Model
{
    //
    protected $table = 'dat_tours';

    protected $fillable = ['ngay_khoi_hanh', 'so_dien_thoai_KH', 'email_KH', 'so_nguoi_lon', 'so_tre_em','gia_tien' ,'ma_tour', 'ma_tai_khoan', 'ma_thanh_toan'];

    public $timestamps = true;

    public function tours()
    {
    	return $this->belongsTo('App\Tour','ma_tour','id');
    }
      public function thanh_toan()
    {
    	return $this->belongsTo('App\ThanhToan','ma_thanh_toan','id');
    }

    public function users()
    {
    	return $this->belongsTo('App\User','ma_tai_khoan','id');
    }
}
