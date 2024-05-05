<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Province::create(['name' => 'Islamabad']);
        Province::create(['name' => 'Punjab']);
        Province::create(['name' => 'KPK']);
        Province::create(['name' => 'Sindh']);
        Province::create(['name' => 'Balochistion']);
        Province::create(['name' => 'Gilgit Baltistan']);
        Province::create(['name' => 'Azad Jammu Kashmir']);
    }
}
