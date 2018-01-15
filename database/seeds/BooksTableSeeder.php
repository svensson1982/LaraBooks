<?php

use Illuminate\Database\Seeder;
 
use Faker\Factory as Faker;
 
class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
        foreach (range(1, 20) as $index) {
	        DB::table('books')->insert([
	        	'name' => $faker->sentence($nbWords = 4, $variableNbWords = true),
	            'publisher' => $faker->company,
	            'author' => $faker->name,
	            'year' => $faker->year,
	            'isbn' => $faker->isbn13,
	        ]);
	    }
    }
}
