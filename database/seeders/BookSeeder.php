<?php

namespace Database\Seeders;

use App\Models\Book;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i=1; $i<=10; $i++){
            Book::create([
                'publisher_id' => mt_rand(1,4),
                'title' => 'Book Title',
                'author' => 'Author Name',
                'year' => $faker->year(),
                'synopsis' => $faker->sentence(),
                'image' => $faker->imageUrl(640, 480, 'book_covers', true),

            ]);
        }
    }
}
