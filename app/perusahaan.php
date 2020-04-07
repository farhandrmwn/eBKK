<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perusahaan extends Model
{
    protected $table = 'tb_perusahaan';
    protected $primaryKey = 'id_perusahaan';
    protected $fillable = ['nama','jenis_industri','alamat','situs','bahasa'];
}
