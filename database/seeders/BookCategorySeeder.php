<?php

namespace Database\Seeders;

use App\Models\Book_category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        for($i=1; $i<=10; $i++){
            Book_category::create([
                'book_id' => mt_rand(1,10),
                'category_id' => mt_rand(1,4)
            ]);
        }
    }
}
