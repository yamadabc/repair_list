<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Repair extends Model
{
    protected $fillable = [
        'property_id','construction_name','construction_price','is_approved','approved_date',
    ];

    public function property()
    {
        return $this->belongsTo('App\Property');
    }

}
