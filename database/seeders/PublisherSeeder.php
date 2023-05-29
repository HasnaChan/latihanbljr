<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i=1; $i<=4; $i++){
            Publisher::create([
                'name' => 'Publisher '.$i,
                'address' => $faker->address(),
                'phone' => $faker->phoneNumber(),
                'email' => $faker->email(),
                'image' => $faker->imageUrl(640, 480, 'buildings', true),

            ]);
        }

        $faker = Faker::create('id_ID');


    }
}
