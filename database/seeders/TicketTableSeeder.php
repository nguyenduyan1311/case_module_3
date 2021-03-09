<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TicketTableSeeder extends Seeder
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
            $ticket = new Ticket();
            $ticket->ticket_id = "Ticket ID of ticket $i";
            $ticket->ticket_type = $faker->randomElement(['Một chiều','Khứ hồi']);
            $ticket->seat_class = $faker->randomElement(['Phổ thông','Phổ thông đặc biệt','Thương gia','Hạng nhất']);
            $ticket->price = rand(1000000,100000000);
            $ticket->status = $faker->randomElement(['Received','Exchanged','Canceled']);
            $ticket->save();
        }
    }
}
