<?php

namespace Database\Seeders;

use App\Models\Flight;
use Faker\Factory;
use Illuminate\Database\Seeder;

class FlightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create();
        for ($i=1;$i<=100;$i++){
            $flight = new Flight();
            $flight->flight_id = "Flight ID of flight $i";
            $flight->airline = $faker->randomElement(['Vietnam Airlines','VietJet Air','Jetstar Pacific Airlines','Bamboo Airways']);
            $flight->airplane = "Airbus " . chr(rand(65,90)) . chr(rand(65,90)) . '-' . rand(100,999);
            $flight->starting_place = $faker->randomElement(['Hà Nội','TP.HCM']);
            $flight->destination_place = $faker->city;
            $flight->starting_date = $faker->date();
            $flight->scheduled_time = $faker->time('H:i');
            $flight->estimated_time = $faker->time('H:i');
            $flight->save();
        }
    }
}
