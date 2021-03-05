<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            'name' => "MacDonald's",
            'description' => "Classic, long-running fast-food chain known for its burgers, fries & shakes.",
            'grade' => 3.2,
            'localization' => "Centre Commercial Grand Ciel, 30 Boulevard Paul Vaillant Couturier, 94200 Ivry-sur-Seine",
            'phone_number' => "01 49 60 62 60",
            'website' => "macdonalds.fr",
            'hours' => "Monday-Saturday 9AM–9PM, Sunday Closed"
        ]);

        DB::table('restaurants')->insert([
            'name' => "StarBuck",
            'description' => "Coffee.",
            'grade' => 4.3,
            'localization' => "Centre Commercial Grand Ciel, 30 Boulevard Paul Vaillant Couturier, 94200 Ivry-sur-Seine",
            'phone_number' => "01 49 60 62 60",
            'website' => "starbuck.com",
            'hours' => "11AM-9:30PM"
        ]);
    }
}
