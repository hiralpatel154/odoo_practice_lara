<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarkupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('markups')->insert([
            [
                'cid'=>1,
                'food_type'=>'OilFree',
                'from_price'=>100,
                'to_price'=>200,
            ],
            [
                'cid'=>1,
                'food_type'=>'Oilly',
                'from_price'=>120,
                'to_price'=>150,
            ],
        ]);
    }
}
