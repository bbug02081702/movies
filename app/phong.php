<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phong extends Model
{
    protected $table='phong';
    public $timestamps=true;

    public function lichchieu()
    {
    	return $this->hasMany('App\lichchieu','id_phong','id');
    }
}
