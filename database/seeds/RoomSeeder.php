<?php

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rooms=[
        	[
        		'hotel_id'=>'1',
        		'type'=>'luxury suite',
        		'description'=>'2000 sqft, 3 king sized beds, full kitchen.',
        		'price'=>980,
        		'image'=>'G:\img\Emirates-Stadium-guide'
        	],
        	[
        		'hotel_id'=>'1',
        		'type'=>'Double',
        		'description'=>'two queen beds.',
        		'price'=>300.00,
        		'image'=>'G:\img\Emirates-Stadium-guide'
        	],
        	[
        		'hotel_id'=>'2',
        		'type'=>'suite',
        		'description'=>'luxurious room',
        		'price'=>480,
        		'image'=>'G:\img\Emirates-Stadium-guide'
        	],
        	[
        		'hotel_id'=>'3',
        		'type'=>'Economy',
        		'description'=>'one queen bed, min fridge.',
        		'price'=>180,
        		'image'=>'G:\img\Emirates-Stadium-guide'
        	],
        	[
        		'hotel_id'=>'3',
        		'type'=>'suite',
        		'description'=>'one ultra wide',
        		'price'=>399.00,
        		'image'=>'G:\img\Emirates-Stadium-guide'
        	]
        ];

        foreach ($rooms as $room) {
        	# code...
        	Room::create(array(
        		'hotel_id'=>$room['hotel_id'],
        		'type'=>$room['type'],
        		'description'=>$room['description'],
        		'price'=>$room['price'],
        		'image'=>$room['image']
        	));
        }
    }
}
