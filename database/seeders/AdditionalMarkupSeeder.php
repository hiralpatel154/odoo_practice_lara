<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Markup;
use Illuminate\Support\Facades\DB;

class AdditionalMarkupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Markup::create([
            'cid' => 2,
            'food_type' => 'Oilly',
            'from_price' => 2000,
            'to_price' => 2200,
        ]);

        Markup::create([
            'cid' => 1,
            'food_type' => 'OilFree',
            'from_price' => 550,
            'to_price' => 5150,
        ]);
    }
}
