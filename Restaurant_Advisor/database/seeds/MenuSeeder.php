<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'name' => "Menu A5",
            'description' => "8 sushis, 4 makis,  4 calofornia rolls",
            'price' => 16.5,
            'restaurant_id' => 1
        ]);

        DB::table('menus')->insert([
            'name' => "Black Coffe",
            'description' => "Black Coffee",
            'price' => 3,
            'restaurant_id' => 2
        ]);
    }
}
