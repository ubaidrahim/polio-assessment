<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Division;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $division = \App\Models\Province::where('name', 'Islamabad')->first();
        Division::create(['name' => 'Islamabad', 'province_id' => $division->id]);


        $division = \App\Models\Province::where('name', 'Punjab')->first();
        Division::create(['name' => 'Bahawalpur', 'province_id' => $division->id]);
        Division::create(['name' => 'Dera Ghazi Khan', 'province_id' => $division->id]);
        Division::create(['name' => 'Faisalabad', 'province_id' => $division->id]);
        Division::create(['name' => 'Gujranwala', 'province_id' => $division->id]);
        Division::create(['name' => 'Gujrat', 'province_id' => $division->id]);
        Division::create(['name' => 'Lahore', 'province_id' => $division->id]);
        Division::create(['name' => 'Mianwali', 'province_id' => $division->id]);
        Division::create(['name' => 'Multan', 'province_id' => $division->id]);
        Division::create(['name' => 'Rawalpindi', 'province_id' => $division->id]);
        Division::create(['name' => 'Sahiwal', 'province_id' => $division->id]);
        Division::create(['name' => 'Sargodha', 'province_id' => $division->id]);


        $division = \App\Models\Province::where('name', 'KPK')->first();
        Division::create(['name' => 'Bannu', 'province_id' => $division->id]);
        Division::create(['name' => 'Dera Ismail Khan', 'province_id' => $division->id]);
        Division::create(['name' => 'Hazara', 'province_id' => $division->id]);
        Division::create(['name' => 'Kohat', 'province_id' => $division->id]);
        Division::create(['name' => 'Malakand', 'province_id' => $division->id]);
        Division::create(['name' => 'Mardan', 'province_id' => $division->id]);
        Division::create(['name' => 'Peshawar', 'province_id' => $division->id]);
        

        $division = \App\Models\Province::where('name', 'Sindh')->first();
        Division::create(['name' => 'Banbhore', 'province_id' => $division->id]);
        Division::create(['name' => 'Hyderabad', 'province_id' => $division->id]);
        Division::create(['name' => 'Karachi', 'province_id' => $division->id]);
        Division::create(['name' => 'Sukkur', 'province_id' => $division->id]);
        Division::create(['name' => 'Larkana', 'province_id' => $division->id]);
        Division::create(['name' => 'Mirpur Khas', 'province_id' => $division->id]);
        Division::create(['name' => 'Shaheed Benazirabad', 'province_id' => $division->id]);
        
        
        $division = \App\Models\Province::where('name', 'Balochistion')->first();
        Division::create(['name' => 'Kalat', 'province_id' => $division->id]);
        Division::create(['name' => 'Makran', 'province_id' => $division->id]);
        Division::create(['name' => 'Naseerabad', 'province_id' => $division->id]);
        Division::create(['name' => 'Quetta', 'province_id' => $division->id]);
        Division::create(['name' => 'Sibi', 'province_id' => $division->id]);
        Division::create(['name' => 'Zhob', 'province_id' => $division->id]);
        Division::create(['name' => 'Loralai', 'province_id' => $division->id]);
        Division::create(['name' => 'Rakhshan', 'province_id' => $division->id]);
        
        
        $division = \App\Models\Province::where('name', 'Gilgit Baltistan')->first();
        Division::create(['name' => 'Gilgit', 'province_id' => $division->id]);
        Division::create(['name' => 'Baltistan', 'province_id' => $division->id]);
        Division::create(['name' => 'Diamer', 'province_id' => $division->id]);
        
        
        $division = \App\Models\Province::where('name', 'Azad Jammu Kashmir')->first();
        Division::create(['name' => 'Mirpur', 'province_id' => $division->id]);
        Division::create(['name' => 'Muzaffarabad', 'province_id' => $division->id]);
        Division::create(['name' => 'Poonch', 'province_id' => $division->id]);

        
    }
}
