<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lowongan extends Model
{
    protected $table = 'tb_lowongan';
    protected $primaryKey = 'id_lowongan';
    protected $fillable = ['id_perusahaan','jenis_lowongan','deskripsi','requirements','benefits'];
}
