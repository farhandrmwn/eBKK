<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = 'tb_alumni';
    protected $primaryKey = 'nis';
    protected $fillable = ['nis','nama','jk','alamat','no_hp','email','status','username','password'];
}
