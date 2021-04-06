<?php

namespace App\Models\Treatment;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User\User', 'id', 'user_id');
    }

    public function state()
    {
        return $this->belongsTo('App\Models\State\State', 'id', 'from');
    }

    public function airClass()
    {
        return $this->belongsTo('App\Models\TicketClass\TicketClass', 'id', 'at_class');
    }

    public function trainClass()
    {
        return $this->belongsTo('App\Models\TicketClass\TicketClass', 'id', 'tt_class');
    }

    public function hospital()
    {
        return $this->belongsTo('App\Models\Hospital\Hospital', 'id', 'hospital_id');
    }

    public function roomcategory()
    {
        return $this->belongsTo('App\Models\RoomCategory\RoomCategory', 'id', 'tt_class');
    }

    public function hotel(){
        return $this->belongsTo('App\Models\Hotel\Hotel', 'id', 'hotel_id');
    }
}
