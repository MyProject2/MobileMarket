<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewProductTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('new_products')->delete();
        $faker = Faker\Factory::create();
        for($i =0; $i<10; $i++){
            \App\NewProduct::create([
                'name'=>$faker->name,
                'discription'=>$faker->text,
                'color_id'=>$faker->numberBetween($min = 1, $max = 10),
                'manufacture_id'=>$faker->numberBetween($min = 1, $max = 10),
                'quantity'=>$faker->numberBetween($min = 1, $max = 10),
                'product_code'=>$faker->randomLetter,
                'price'=>$faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 100)
            ]);
        }
    }

}
