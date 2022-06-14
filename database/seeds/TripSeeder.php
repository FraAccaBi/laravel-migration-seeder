<?php

use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trips = [
            [
              'location' => '',
              'city' => '',
              'departure' => '',
              'arrival' => '',
              'country' => '',
              'users_nr' => '',
              'rooms' => '',
              'discount' => '',
              'price' => ''
            ], 
            # Fill the data, then copy paste to add more entries.
          ]
    }
}
