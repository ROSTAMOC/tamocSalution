<?php

use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $hotels=[
        	[
        		'name'=>'selena',
        		'location'=>'kampala',
        		'description'=>'international luxurious hotel',
        		'image'=>'G:\img\Emirates-Stadium-guide'
        	],
        	[
        		'name'=>'Jfreigh',
        		'location'=>'kikoni',
        		'description'=>'international luxurious hotel',
        		'image'=>'G:\img\f'
        	],
        	[
        		'name'=>'pacific',
        		'location'=>'kampala',
        		'description'=>'international luxurious hotel',
        		'image'=>'G:\img\paci'
        	]
        ];

        foreach ($hotels as $hotel) {
        	# code...
        	Hotel::create(array(
        		'name'=>$hotel['name'],
        		'location'=>$hotel['location'],
        		'description'=>$hotel['description'],
        		'image'=>$hotel['image']
        	));
        }
    }
}
