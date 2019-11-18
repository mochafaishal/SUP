<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AircraftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // data faker indonesia
        $faker = Faker::create('id_ID');
 
        // membuat data dummy sebanyak 10 record
        for($x = 1; $x <= 10; $x++){
 
        	// insert data dummy pegawai dengan faker
        	DB::table('aircraft')->insert([
        		'asset_name' => $faker->name,
                'equipment_type' => $faker->domainWord ,
                'serial_no' => $faker->creditCardNumber,
                'no_registration' => $faker->creditCardNumber,
                
                'lessor' => $faker->buildingNumber,
                'start_date' => $faker->dateTime,
                'end_date' => $faker->dateTime
        	]);
            
        }
 
    }
}
