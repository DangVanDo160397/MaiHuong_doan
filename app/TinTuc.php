<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    //
    protected $table = 'Tin_Tuc';

    protected $fillable = ['tieu_de_tin_tuc', 'hinh_anh_tin_tuc', 'noi_dung_tin_tuc', 'loai_tin_tuc'];

    public $timestamps = true;

    public function dia_diem()
    {
      return $this->belongsTo('App\DiaDiem','ma_dia_diem','id');
    }
}
