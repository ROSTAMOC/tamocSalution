<?php

use Illuminate\Database\Seeder;
use App\Models\Reservation;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
                $reservations=[
        	[
        		'user_id'=>'1',
        		'room_id'=>1,
        		'num_of_guests'=>4,
        		'arrival'=>'2020-05-18',
        		'departure'=>'2020-05-23'
        	],
        	[
        		'user_id'=>'1',
        		'room_id'=>2,
        		'num_of_guests'=>1,
        		'arrival'=>'2020-05-11',
        		'departure'=>'2020-05-14'
        	],
        	[
        		'user_id'=>'1',
        		'room_id'=>3,
        		'num_of_guests'=>4,
        		'arrival'=>'2020-05-06',
        		'departure'=>'2020-05-10'
        	],
        	[
        		'user_id'=>'1',
        		'room_id'=>4,
        		'num_of_guests'=>2,
        		'arrival'=>'2020-05-11',
        		'departure'=>'2020-05-13'
        	],
        	[
        		'user_id'=>'1',
        		'room_id'=>2,
        		'num_of_guests'=>2,
        		'arrival'=>'2020-05-18',
        		'departure'=>'2020-05-23'
        	]
        ];

        foreach ($reservations as $reservation) {
        	# code...
        	Reservation::create(array(
        		'user_id'=>$reservation['user_id'],
        		'room_id'=>$reservation['room_id'],
        		'num_of_guests'=>$reservation['num_of_guests'],
        		'arrival'=>$reservation['arrival'],
        		'departure'=>$reservation['departure']
        	));
        }
    }
}
