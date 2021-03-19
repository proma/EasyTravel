<?php

namespace App\Models\Offer;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public function touroffers()
    {
        return $this->hasMany('App\Models\Offer\Offer');
    }
    public function treatmentoffer()
    {
        return $this->hasMany('App\Models\Offer\Offer');
    }
    
}
