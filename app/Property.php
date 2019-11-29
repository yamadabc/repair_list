<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['property_name'];

    public function repairs()
    {
        return $this -> hasMany('App\Repair'); 
    }
}
