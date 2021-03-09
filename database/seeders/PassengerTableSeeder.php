<?php

namespace Database\Seeders;

use App\Models\Passenger;
use App\Models\Customer;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PassengerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i=1;$i<=100;$i++){
            $passenger = new Passenger();
            $passenger->passenger_id = "Passenger ID of passenger $i";
            $passenger->first_name = $faker->firstName;
            $passenger->last_name = $faker->lastName;
            $passenger->gender = $faker->randomElement(['Nam','Nữ','Khác']);
            $passenger->birthday = $faker->dateTimeBetween('-100 years', 'now');
            $passenger->country = $faker->country;
            $passenger->save();
        }
    }
}
