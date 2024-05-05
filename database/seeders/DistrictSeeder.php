<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\District;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $division = \App\Models\Division::where('name', 'Islamabad')->first();
        District::create(['name' => 'Islamabad', 'division_id' => $division->id]);

        $division = \App\Models\Division::where('name', 'Bahawalpur')->first();
        District::create(['name' => 'Bahawalnagar', 'division_id' => $division->id]);
        District::create(['name' => 'Bahawalpur', 'division_id' => $division->id]);
        District::create(['name' => 'Rahim Yar Khan', 'division_id' => $division->id]);
        
        
        $division = \App\Models\Division::where('name', 'Dera Ghazi Khan')->first();
        District::create(['name' => 'Dera Ghazi Khan', 'division_id' => $division->id]);
        District::create(['name' => 'Jampur', 'division_id' => $division->id]);
        District::create(['name' => 'Layyah', 'division_id' => $division->id]);
        District::create(['name' => 'Muzaffargarh', 'division_id' => $division->id]);
        District::create(['name' => 'Rajanpur', 'division_id' => $division->id]);
        District::create(['name' => 'Taunsa', 'division_id' => $division->id]);
        District::create(['name' => 'Kot Addu', 'division_id' => $division->id]);
        
        
        $division = \App\Models\Division::where('name', 'Faisalabad')->first();
        District::create(['name' => 'Chiniot', 'division_id' => $division->id]);
        District::create(['name' => 'Faisalabad', 'division_id' => $division->id]);
        District::create(['name' => 'Jhang', 'division_id' => $division->id]);
        
        
        $division = \App\Models\Division::where('name', 'Gujranwala')->first();
        District::create(['name' => 'Gujranwala', 'division_id' => $division->id]);
        District::create(['name' => 'Narowal', 'division_id' => $division->id]);
        District::create(['name' => 'Sialkot', 'division_id' => $division->id]);
        
        
        $division = \App\Models\Division::where('name', 'Gujrat')->first();
        District::create(['name' => 'Gujrat', 'division_id' => $division->id]);
        District::create(['name' => 'Hafizabad', 'division_id' => $division->id]);
        District::create(['name' => 'Mandi Bahauddin', 'division_id' => $division->id]);
        District::create(['name' => 'Wazirabad', 'division_id' => $division->id]);
        
        
        $division = \App\Models\Division::where('name', 'Lahore')->first();
        District::create(['name' => 'Kasur', 'division_id' => $division->id]);
        District::create(['name' => 'Lahore', 'division_id' => $division->id]);
        District::create(['name' => 'Sheikhupura', 'division_id' => $division->id]);
        
        
        $division = \App\Models\Division::where('name', 'Mianwali')->first();
        District::create(['name' => 'Bhakkar', 'division_id' => $division->id]);
        District::create(['name' => 'Mianwali', 'division_id' => $division->id]);
        
        
        $division = \App\Models\Division::where('name', 'Multan')->first();
        District::create(['name' => 'Khanewal', 'division_id' => $division->id]);
        District::create(['name' => 'Lodhran', 'division_id' => $division->id]);
        District::create(['name' => 'Multan', 'division_id' => $division->id]);
        District::create(['name' => 'Vehari', 'division_id' => $division->id]);
        
        
        $division = \App\Models\Division::where('name', 'Rawalpindi')->first();
        District::create(['name' => 'Attock', 'division_id' => $division->id]);
        District::create(['name' => 'Chakwal', 'division_id' => $division->id]);
        District::create(['name' => 'Jhelum', 'division_id' => $division->id]);
        District::create(['name' => 'Rawalpindi', 'division_id' => $division->id]);
        District::create(['name' => 'Talagang', 'division_id' => $division->id]);
        District::create(['name' => 'Murree', 'division_id' => $division->id]);
        
        
        $division = \App\Models\Division::where('name', 'Sahiwal')->first();
        District::create(['name' => 'Okara', 'division_id' => $division->id]);
        District::create(['name' => 'Pakpattan', 'division_id' => $division->id]);
        District::create(['name' => 'Sahiwal', 'division_id' => $division->id]);
        
        
        $division = \App\Models\Division::where('name', 'Sargodha')->first();
        District::create(['name' => 'Khushab', 'division_id' => $division->id]);
        District::create(['name' => 'Sargodha', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Bannu')->first();
        District::create(['name' => 'Bannu', 'division_id' => $division->id]);
        District::create(['name' => 'Lakki Marwat', 'division_id' => $division->id]);
        District::create(['name' => 'North Waziristan', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Dera Ismail Khan')->first();
        District::create(['name' => 'Dera Ismail Khan', 'division_id' => $division->id]);
        District::create(['name' => 'Upper South Waziristan', 'division_id' => $division->id]);
        District::create(['name' => 'Lower South Waziristan', 'division_id' => $division->id]);
        District::create(['name' => 'Tank', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Hazara')->first();
        District::create(['name' => 'Abbottabad', 'division_id' => $division->id]);
        District::create(['name' => 'Allai', 'division_id' => $division->id]);
        District::create(['name' => 'Battagram', 'division_id' => $division->id]);
        District::create(['name' => 'Haripur', 'division_id' => $division->id]);
        District::create(['name' => 'Kolai Palas', 'division_id' => $division->id]);
        District::create(['name' => 'Lower Kohistan', 'division_id' => $division->id]);
        District::create(['name' => 'Mansehra', 'division_id' => $division->id]);
        District::create(['name' => 'Torghar', 'division_id' => $division->id]);
        District::create(['name' => 'Upper Kohistan', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Kohat')->first();
        District::create(['name' => 'Hangu', 'division_id' => $division->id]);
        District::create(['name' => 'Karak', 'division_id' => $division->id]);
        District::create(['name' => 'Kohat', 'division_id' => $division->id]);
        District::create(['name' => 'Kurram', 'division_id' => $division->id]);
        District::create(['name' => 'Orakzai', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Malakand')->first();
        District::create(['name' => 'Bajaur', 'division_id' => $division->id]);
        District::create(['name' => 'Buner', 'division_id' => $division->id]);
        District::create(['name' => 'Central Dir District', 'division_id' => $division->id]);
        District::create(['name' => 'Lower Dir', 'division_id' => $division->id]);
        District::create(['name' => 'Lower Chitral', 'division_id' => $division->id]);
        District::create(['name' => 'Malakand', 'division_id' => $division->id]);
        District::create(['name' => 'Shangla', 'division_id' => $division->id]);
        District::create(['name' => 'Swat', 'division_id' => $division->id]);
        District::create(['name' => 'Upper Dir', 'division_id' => $division->id]);
        District::create(['name' => 'Upper Chitral', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Mardan')->first();
        District::create(['name' => 'Mardan', 'division_id' => $division->id]);
        District::create(['name' => 'Swabi', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Peshawar')->first();
        District::create(['name' => 'Charsadda', 'division_id' => $division->id]);
        District::create(['name' => 'Khyber', 'division_id' => $division->id]);
        District::create(['name' => 'Mohmand', 'division_id' => $division->id]);
        District::create(['name' => 'Nowshera', 'division_id' => $division->id]);
        District::create(['name' => 'Peshawar', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Banbhore')->first();
        District::create(['name' => 'Badin', 'division_id' => $division->id]);
        District::create(['name' => 'Sujawal', 'division_id' => $division->id]);
        District::create(['name' => 'Thatta', 'division_id' => $division->id]);
        
        
        $division = \App\Models\Division::where('name', 'Hyderabad')->first();
        District::create(['name' => 'Dadu', 'division_id' => $division->id]);
        District::create(['name' => 'Hyderabad', 'division_id' => $division->id]);
        District::create(['name' => 'Jamshoro', 'division_id' => $division->id]);
        District::create(['name' => 'Matiari', 'division_id' => $division->id]);
        District::create(['name' => 'Tando Allahyar', 'division_id' => $division->id]);
        District::create(['name' => 'Tando Muhammad Khan', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Karachi')->first();
        District::create(['name' => 'Karachi Central', 'division_id' => $division->id]);
        District::create(['name' => 'Karachi East', 'division_id' => $division->id]);
        District::create(['name' => 'Karachi South', 'division_id' => $division->id]);
        District::create(['name' => 'Karachi West', 'division_id' => $division->id]);
        District::create(['name' => 'Korangi', 'division_id' => $division->id]);
        District::create(['name' => 'Keamari', 'division_id' => $division->id]);
        District::create(['name' => 'Malir', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Sukkur')->first();
        District::create(['name' => 'Ghotki', 'division_id' => $division->id]);
        District::create(['name' => 'Khairpur', 'division_id' => $division->id]);
        District::create(['name' => 'Sukkur', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Larkana')->first();
        District::create(['name' => 'Jacobabad', 'division_id' => $division->id]);
        District::create(['name' => 'Kashmore', 'division_id' => $division->id]);
        District::create(['name' => 'Larkana', 'division_id' => $division->id]);
        District::create(['name' => 'Qambar Shahdadkot', 'division_id' => $division->id]);
        District::create(['name' => 'Shikarpur', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Mirpur Khas')->first();
        District::create(['name' => 'Mirpur Khas', 'division_id' => $division->id]);
        District::create(['name' => 'Sanghar', 'division_id' => $division->id]);
        District::create(['name' => 'Tharparkar', 'division_id' => $division->id]);
        District::create(['name' => 'Umerkot', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Shaheed Benazirabad')->first();
        District::create(['name' => 'Naushahro Feroze', 'division_id' => $division->id]);
        District::create(['name' => 'Shaheed Benazirabad', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Kalat')->first();
        District::create(['name' => 'Awaran', 'division_id' => $division->id]);
        District::create(['name' => 'Hub', 'division_id' => $division->id]);
        District::create(['name' => 'Kalat', 'division_id' => $division->id]);
        District::create(['name' => 'Khuzdar', 'division_id' => $division->id]);
        District::create(['name' => 'Lasbela', 'division_id' => $division->id]);
        District::create(['name' => 'Mastung', 'division_id' => $division->id]);
        District::create(['name' => 'Surab', 'division_id' => $division->id]);
        District::create(['name' => 'Ziarat', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Makran')->first();
        District::create(['name' => 'Gwadar', 'division_id' => $division->id]);
        District::create(['name' => 'Kech', 'division_id' => $division->id]);
        District::create(['name' => 'Panjgur', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Naseerabad')->first();
        District::create(['name' => 'Jafarabad', 'division_id' => $division->id]);
        District::create(['name' => 'Jhal Magsi', 'division_id' => $division->id]);
        District::create(['name' => 'Kachhi', 'division_id' => $division->id]);
        District::create(['name' => 'Nasirabad', 'division_id' => $division->id]);
        District::create(['name' => 'Sohbatpur', 'division_id' => $division->id]);
        District::create(['name' => 'Usta Muhammad', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Quetta')->first();
        District::create(['name' => 'Chaman', 'division_id' => $division->id]);
        District::create(['name' => 'Pishin', 'division_id' => $division->id]);
        District::create(['name' => 'Quetta', 'division_id' => $division->id]);
        District::create(['name' => 'Qila Abdullah', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Sibi')->first();
        District::create(['name' => 'Dera Bugti', 'division_id' => $division->id]);
        District::create(['name' => 'Harnai', 'division_id' => $division->id]);
        District::create(['name' => 'Kohlu', 'division_id' => $division->id]);
        District::create(['name' => 'Sibi', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Zhob')->first();
        District::create(['name' => 'Qilla Saifullah', 'division_id' => $division->id]);
        District::create(['name' => 'Sherani', 'division_id' => $division->id]);
        District::create(['name' => 'Zhob', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Loralai')->first();
        District::create(['name' => 'Barkhan', 'division_id' => $division->id]);
        District::create(['name' => 'Duki', 'division_id' => $division->id]);
        District::create(['name' => 'Loralai', 'division_id' => $division->id]);
        District::create(['name' => 'Musakhel', 'division_id' => $division->id]);
        
        
        $division = \App\Models\Division::where('name', 'Rakhshan')->first();
        District::create(['name' => 'Chagai', 'division_id' => $division->id]);
        District::create(['name' => 'Kharan', 'division_id' => $division->id]);
        District::create(['name' => 'Nushki', 'division_id' => $division->id]);
        District::create(['name' => 'Washuk', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Gilgit')->first();
        District::create(['name' => 'Ghizer', 'division_id' => $division->id]);
        District::create(['name' => 'Gilgit', 'division_id' => $division->id]);
        District::create(['name' => 'Hunza', 'division_id' => $division->id]);
        District::create(['name' => 'Nagar', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Baltistan')->first();
        District::create(['name' => 'Ghanche', 'division_id' => $division->id]);
        District::create(['name' => 'Skardu', 'division_id' => $division->id]);
        District::create(['name' => 'Kharmang', 'division_id' => $division->id]);
        District::create(['name' => 'Shigar', 'division_id' => $division->id]);
        
        
        $division = \App\Models\Division::where('name', 'Diamer')->first();
        District::create(['name' => 'Astore', 'division_id' => $division->id]);
        District::create(['name' => 'Diamer', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Mirpur')->first();
        District::create(['name' => 'Mirpur', 'division_id' => $division->id]);
        District::create(['name' => 'Bhimber', 'division_id' => $division->id]);
        District::create(['name' => 'Kotli', 'division_id' => $division->id]);
        

        $division = \App\Models\Division::where('name', 'Muzaffarabad')->first();
        District::create(['name' => 'Muzaffarabad', 'division_id' => $division->id]);
        District::create(['name' => 'Hattian Bala', 'division_id' => $division->id]);
        District::create(['name' => 'Neelum', 'division_id' => $division->id]);
        
        $division = \App\Models\Division::where('name', 'Poonch')->first();
        District::create(['name' => 'Poonch', 'division_id' => $division->id]);
        District::create(['name' => 'Bagh', 'division_id' => $division->id]);
        District::create(['name' => 'Haveli', 'division_id' => $division->id]);
        District::create(['name' => 'Sudhnati', 'division_id' => $division->id]);
        

    }
}
