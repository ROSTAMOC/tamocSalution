<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use App\Model\Room;

class Reservation extends Model
{
    //
    protected $fillable =[
    	'user_id',
    	'room_id',
    	'num_of_guests',
    	'arrival',
    	'departure'
    ];

    public function room(){
    	return $this->belongsTo('App\Models\Room');
    }
}
