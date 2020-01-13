<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingBilling extends Model
{
    //
    public function room(){
        return $this->belongsTo('App\Booking');
    }
}
