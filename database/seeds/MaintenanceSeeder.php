<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MaintenanceSeeder extends Seeder
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
        for($x = 1; $x <= 5; $x++){
 
        	// insert data dummy pegawai dengan faker
        	DB::table('maintenance')->insert([
        		'maintenance_name' => $faker->name,
                'maintenance_type' => $faker->address,
                'implementation' => $faker->address,
                'payment_type' => $faker->address,
                'reserve_rate' => $faker->address,
                'estimed_cost' => $faker->buildingNumber,
        	]);
 
        }
 
    }
}
