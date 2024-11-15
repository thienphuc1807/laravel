<?php

namespace Database\Seeders;

use App\Models\Club as ModelsClub;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Club extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsClub::factory()->create([
            "name" => "Unknow Football Club"
        ]);
    }
}
