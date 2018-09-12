<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class a extends Model
{
	protected $table= 'as';
    protected $fillable = array('Nama','Lahir');
    public $timestamp = true;

}
