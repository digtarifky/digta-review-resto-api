<?php

namespace Database\Seeders;

use App\Models\Resto;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Seeder;

class RestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resto::factory()->has(Review::factory()->count(5))->count(100)->create();
    }
}
