<?php
use App\Models\Trip;
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
              'location' => 'Bhamas',
              'days' => '25',
              'image' => 'https://picsum.photos/600/300',
              'type' => 'All inclusive luxury',
              'price'=> 100.0
            ], 
            [
              'location' => 'Greece',
              'days' => '5',
              'image' => 'https://picsum.photos/600/300',
              'type' => 'All inclusive luxury',
              'price'=> 10.0
            ],
            [
              'location' => 'England',
              'days' => '6',
              'image' => 'https://picsum.photos/600/300',
              'type' => 'All inclusive luxury',
              'price'=> 1000.00

            ],
            # Fill the data, then copy paste to add more entries.
          ];

          foreach($trips as $trip){
            $new_trip = new Trip();
            $new_trip->location = $trip['location'];
            $new_trip->days = $trip['days'];
            $new_trip->image = $trip['image'];
            $new_trip->type = $trip['type'];
            $new_trip->price = $trip['price'];
            $new_trip->save();
          }
    }
}
