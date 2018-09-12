<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nama_Siswa_RPL_1 extends Model
{
    protected $table= 'nama__siswa__r_p_l_1s';
    protected $fillable = array('Nama','Lahir');
    public $timestamp = true;
}
