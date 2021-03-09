<?php

namespace Database\Seeders;

use App\Models\Customer;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i=1;$i<=50;$i++){
            $customer = new Customer();
            $customer->customer_id = "Customer ID of customer $i";
            $customer->first_name = $faker->firstName;
            $customer->last_name = $faker->lastName;
            $customer->phone = $faker->phoneNumber;
            $customer->email = $faker->email;
            $customer->tickets_number = 2;
            $customer->save();
        }
    }
}
