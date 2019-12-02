<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Repair extends Model
{
    protected $fillable = [
        'property_id','construction_name','construction_price',
    ];

    public function property()
    {
        return $this->belongsTo('App\Property');
    }

}
