<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thietlap extends Model
{
    //
    protected $table = 'Thiet_lap';

    protected $fillable = ['id','logo','banner','link_lien_Ket','gioi_thieu','created_at','updated_at'];

    public $timestamps = true;
}


