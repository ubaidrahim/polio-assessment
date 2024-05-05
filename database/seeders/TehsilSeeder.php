<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tehsil;

class TehsilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $district = \App\Models\District::where('name', 'Dera Bugti')->first();
        Tehsil::create(['name' => 'Dera Bugti', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Phelawagh', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sui', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Baiker', 'district_id' => $district->id]);
        
        $district = \App\Models\District::where('name', 'Harnai')->first();
        Tehsil::create(['name' => 'Harnai', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Shahrig', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Khoast', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Kohlu')->first();
        Tehsil::create(['name' => 'Kahan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kohlu', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Maiwand', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Tamboo', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Grisini', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Sibi')->first();
        Tehsil::create(['name' => 'Sibi', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kutmandai', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sangan', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Qilla Saifullah')->first();
        Tehsil::create(['name' => 'Killa Saifullah', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Loiband', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Muslim Bagh', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Badini', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kanmetharzai', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Sherani')->first();
        Tehsil::create(['name' => 'Sherani', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Zhob')->first();
        Tehsil::create(['name' => 'Qamar Din Karez', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Zhob', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Ashwat', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kashatu', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sambaza', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Barkhan')->first();
        Tehsil::create(['name' => 'Barkhan', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Duki')->first();
        Tehsil::create(['name' => 'Duki', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Loralai')->first();
        Tehsil::create(['name' => 'Bori', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mekhtar', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Musakhel')->first();
        Tehsil::create(['name' => 'Darug', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kingri', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Musakhel', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Toisar', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Chagai')->first();
        Tehsil::create(['name' => 'Dalbandin', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Nokundi', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Taftan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Chagai', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Kharan')->first();
        Tehsil::create(['name' => 'Kharan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sar-Kharan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Tohumulk', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Pishin')->first();
        Tehsil::create(['name' => 'Barshore', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Hurramzai', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Karezat', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Khanozai', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Pishin', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Saranan', 'district_id' => $district->id]);

        
        $district = \App\Models\District::where('name', 'Quetta')->first();
        Tehsil::create(['name' => 'Chiltan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Zarghoon', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Panjpai', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sadar', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Qila Abdullah')->first();
        Tehsil::create(['name' => 'Chaman', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Gulistan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Killa Abdullah', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Dobandi', 'district_id' => $district->id]);


        
        
        $district = \App\Models\District::where('name', 'Nushki')->first();
        Tehsil::create(['name' => 'Nushki', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Dak', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Washuk')->first();
        Tehsil::create(['name' => 'Besima', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mashkel', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Washuk', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Nag', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Shahgori', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Ghizer')->first();
        Tehsil::create(['name' => 'Punial', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Ishkoman', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Gilgit')->first();
        Tehsil::create(['name' => 'Danyor', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Gilgit', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Juglot', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Hunza')->first();
        Tehsil::create(['name' => 'Aliabad', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Gojal', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Nagar')->first();
        Tehsil::create(['name' => 'Nagar-I', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Nagar-II', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Chalt', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Ghanche')->first();
        Tehsil::create(['name' => 'Daghoni', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Khaplu', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mashabrum', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Chorbut', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Keris', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Haldi', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Skardu')->first();
        Tehsil::create(['name' => 'Gultari', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Skardu', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Gamba', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Rondu', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Kharmang')->first();
        Tehsil::create(['name' => 'Kharmang', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Shigar')->first();
        Tehsil::create(['name' => 'Shigar', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Gulabpur', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Astore')->first();
        Tehsil::create(['name' => 'Astore', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Shounter', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Diamer')->first();
        Tehsil::create(['name' => 'Babusar', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Chilas', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Mirpur')->first();
        Tehsil::create(['name' => 'Dadyal', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mirpur', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Islamgarh', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Bhimber')->first();
        Tehsil::create(['name' => 'Bhimber', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Barnala', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Samahni', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Kotli')->first();
        Tehsil::create(['name' => 'Kotli', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Khuiratta', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Fatehpur Thakiala', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sehnsa', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Charhoi', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Muzaffarabad')->first();
        Tehsil::create(['name' => 'Muzaffarabad', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Nasirbad', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Hattian Bala')->first();
        Tehsil::create(['name' => 'Hattian Bala', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Chikkar', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Leepa', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Neelum')->first();
        Tehsil::create(['name' => 'Athmuqam', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sharda', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Poonch')->first();
        Tehsil::create(['name' => 'Abbaspur', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Hajira', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Rawalakot', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Thorar', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Bagh')->first();
        Tehsil::create(['name' => 'Bagh', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Dhirkot', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Hari Ghel', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Rera', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Birpani', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Haveli')->first();
        Tehsil::create(['name' => 'Haveli', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Khurshidabad', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mumtazabad', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Sudhnati')->first();
        Tehsil::create(['name' => 'Balouch', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mang', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Pallandri', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Tarar Khel', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Mirpur Khas')->first();
        Tehsil::create(['name' => 'Digri', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Jhuddo', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kot Ghulam Muhammad', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mirpur Khas', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Shujabad', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sindhri', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Sanghar')->first();
        Tehsil::create(['name' => 'Jam Nawaz Ali', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Khipro', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sanghar', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Shahdadpur', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sinjhoro', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Tando Adam Khan', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Tharparkar')->first();
        Tehsil::create(['name' => 'Chachro', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Dahli', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Diplo', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kaloi', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Islamkot', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mithi', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Nagarparkar', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Umerkot')->first();
        Tehsil::create(['name' => 'Kunri', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Pithoro', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Samaro', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Umerkot', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Naushahro Feroze')->first();
        Tehsil::create(['name' => 'Bhiria', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kandiaro', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mehrabpur', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Moro', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Naushahro Feroze', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Shaheed Benazirabad')->first();
        Tehsil::create(['name' => 'Daur', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Nawabshah', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sakrand', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Awaran')->first();
        Tehsil::create(['name' => 'Awaran', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Gishkaur', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Jhal Jhao', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Korak Jahoo', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mashkay', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Hub')->first();
        
        
        $district = \App\Models\District::where('name', 'Kalat')->first();
        Tehsil::create(['name' => 'Kalat', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mangochar', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Surab', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Gazg', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Johan', 'district_id' => $district->id]);
        
        $district = \App\Models\District::where('name', 'Khuzdar')->first();
        Tehsil::create(['name' => 'Khuzdar', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Nall', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Wadh', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Zehri', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Baghbana', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Lasbela')->first();
        Tehsil::create(['name' => 'Hub', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Dureji', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Bela', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kanraj', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Uthal', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Mastung')->first();
        Tehsil::create(['name' => 'Dasht Mastung', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mastung', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Khad Koocha', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kardigap', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Ziarat')->first();
        Tehsil::create(['name' => 'Ziarat', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sinjavi', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Gwadar')->first();
        Tehsil::create(['name' => 'Gwadar', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Jiwani', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Ormara', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Pasni', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Suntsar', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Kech')->first();
        Tehsil::create(['name' => 'Mand', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Tump', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Turbat', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Balnigor', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Buleda', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Dasht', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Zamuran', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Panjgur')->first();
        Tehsil::create(['name' => 'Gowargo', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Panjgur', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Paroom', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Gichk', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Jafarabad')->first();
        Tehsil::create(['name' => 'Gandakha', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Jhatpat', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Usta Mohammad', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Jhal Magsi')->first();
        Tehsil::create(['name' => 'Gandawa', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Jhal Magsi', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mirpur', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Kachhi')->first();
        Tehsil::create(['name' => 'Dhadar', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Balanari', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Khattan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mach', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sani', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Sohbatpur')->first();
        Tehsil::create(['name' => 'Faridabad', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Hayrvi', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Manjipur', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sohbatpur', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Karachi Central')->first();
        Tehsil::create(['name' => 'Gulberg Town', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Liaquatabad Town', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'New Karachi Town', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'North Nazimabad Town', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Nazimabad', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'North Karachi', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Karachi East')->first();
        Tehsil::create(['name' => 'Gulistan-e-Jouhar (G-E-J)', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Gulshan Town', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Jamshed Town', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Karachi South')->first();
        Tehsil::create(['name' => 'Lyari Town', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Saddar Town', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Karachi West')->first();
        Tehsil::create(['name' => 'Orangi Town', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Manghopir', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Maripur', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mominabad', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Ittehad town', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Korangi')->first();
        Tehsil::create(['name' => 'Korangi Town', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Landhi Town', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Shah Faisal Town', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Keamari')->first();
        Tehsil::create(['name' => 'Keamari Town', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Baldia Town', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'S.I.T.E. Town', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Karachi Fish Harbour', 'district_id' => $district->id]);


        $district = \App\Models\District::where('name', 'Malir')->first();
        Tehsil::create(['name' => 'Bin Qasim Town', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Gadap Town', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Malir Town', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Jinnah', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Ibrahim Hyderi', 'district_id' => $district->id]);
        
        
        
        
        $district = \App\Models\District::where('name', 'Ghotki')->first();
        Tehsil::create(['name' => 'Daharki', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Ghotki', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Khangarh', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mirpur Mathelo', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Ubauro', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Sukkur')->first();
        Tehsil::create(['name' => 'New Sukkur', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Pano Aqil', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Rohri', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Salehpat', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sukkur', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Jacobabad')->first();
        Tehsil::create(['name' => 'Garhi Khairo', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Jacobabad', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Thul', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Kashmore')->first();
        
        
        $district = \App\Models\District::where('name', 'Larkana')->first();
        
        
        $district = \App\Models\District::where('name', 'Shikarpur')->first();
        
        
        $district = \App\Models\District::where('name', 'Badin')->first();
        
        
        $district = \App\Models\District::where('name', 'Thatta')->first();
        

        $district = \App\Models\District::where('name', 'Dadu')->first();
        Tehsil::create(['name' => 'Dadu', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Johi', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Khairpur Nathan Shah', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mehar', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Hyderabad')->first();
        Tehsil::create(['name' => 'Hyderabad City', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Hyderabad', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Latifabad', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Qasimabad', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Jamshoro')->first();
        Tehsil::create(['name' => 'Kotri', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sehwan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Manjhand', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Thana Bulla Khan', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Bajaur')->first();
        Tehsil::create(['name' => 'Bar Chamarkand', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Barang', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Khar Bajaur', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mamund', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Nawagai', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Salarzai', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Utman Khel', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Buner')->first();
        Tehsil::create(['name' => 'Chagharzai', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Daggar', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Gadezai', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Gagra', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Khudu Khel', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mandanr', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Malakand')->first();
        Tehsil::create(['name' => 'Sam Ranizai', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Swat Ranizai', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Thana Baizai', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Utman Khel', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Shangla')->first();
        Tehsil::create(['name' => 'Alpuri', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Bisham', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Chakesar', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Martung', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Makhuzai', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Shahpur', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Puran', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Swat')->first();
        Tehsil::create(['name' => 'Babuzai', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Barikot', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Behrain', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Charbagh', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kabal', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Khwaza Khela', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Matta', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Upper Dir')->first();
        Tehsil::create(['name' => 'Barawal', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Dir', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kalkot', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Lar Jam', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sharingal', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Wari', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Upper Chitral')->first();
        Tehsil::create(['name' => 'Buni', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mulkhow', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Torkhow', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mastuj', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Mardan')->first();
        Tehsil::create(['name' => 'Ghari Kapura', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Katlang', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mardan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Rustam', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Takht Bhai', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Swabi')->first();
        Tehsil::create(['name' => 'Lahor', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Razar', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Swabi', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Topi', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Charsadda')->first();
        Tehsil::create(['name' => 'Charsadda', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Shabqadar', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Tangi', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Khyber')->first();
        Tehsil::create(['name' => 'Bagh Maidan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Bara', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Bazar Zakha Khel', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Fort Salop', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Jamrud', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Landi Kotal', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mula Gori', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Painda Cheena', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Mohmand')->first();
        Tehsil::create(['name' => 'Ambar Utman Khel', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Halim Zai', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Pindiali', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Pran Ghar', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Safi', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Upper Mohmand (Baizai)', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Yake Ghund', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Nowshera')->first();
        Tehsil::create(['name' => 'Jehangira', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Nowshera', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Pabbi', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Peshawar')->first();
        Tehsil::create(['name' => 'Badbher', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Chamkani', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Hassan Khel', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mathra', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Peshawar City', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Peshtakhara', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Shah Alam', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Abbottabad')->first();
        Tehsil::create(['name' => 'Abbottabad', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Havelian', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Lora', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Lower Tanawal', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Battagram')->first();
        Tehsil::create(['name' => 'Allai', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Batagram', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Haripur')->first();
        Tehsil::create(['name' => 'Ghazi', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Haripur', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Khanpur', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Mansehra')->first();
        Tehsil::create(['name' => 'Baffa Pakhal', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Bala Kot', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Darband', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mansehra', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Oghi', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Tanawal', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Torghar')->first();
        Tehsil::create(['name' => 'Daur Maira', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Judba', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Khander Hassanzai', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Hangu')->first();
        Tehsil::create(['name' => 'Doaba', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Hangu', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Tall', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Karak')->first();
        Tehsil::create(['name' => 'Banda Daud Shah', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Karak', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Takht-e-Nasrati', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Kohat')->first();
        Tehsil::create(['name' => 'Dara Adam Khel', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Gumbat', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kohat', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Lachi', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Bannu')->first();
        Tehsil::create(['name' => 'Baka Khel', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Bannu', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Domel', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kakki', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Miryan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Wazir', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Lakki Marwat')->first();
        Tehsil::create(['name' => 'Bettani', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Ghazni Khel', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Lakki Marwat', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sari Naurang', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'North Waziristan')->first();
        Tehsil::create(['name' => 'Datta Khel', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Dossali', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Gharyum', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Ghulam Khan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mir Ali', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Miran Shah', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Razmak', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Shewa', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Spinwam', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Dera Ismail Khan')->first();
        Tehsil::create(['name' => 'Daraban', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Darazinda', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Dera Ismail Khan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kulachi', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Paharpur', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Paniala', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Paroa', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Upper South Waziristan')->first();
        Tehsil::create(['name' => 'Ladha', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Makin', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sararogha', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sarwakai', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Shaktoi', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Shawal', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Tiarza', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Tank')->first();
        Tehsil::create(['name' => 'Jandola', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Tank', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Attock')->first();
        Tehsil::create(['name' => 'Attock', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Fateh Jang', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Hassan Abdal', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Hazro', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Jand', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Pindi Gheb', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Chakwal')->first();
        Tehsil::create(['name' => 'Chakwal', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Choa Saidan Shah', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kallar Kahar', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Jhelum')->first();
        Tehsil::create(['name' => 'Dina', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Jhelum', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Pind Dadan Khan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sohawa', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Rawalpindi')->first();
        Tehsil::create(['name' => 'Rawalpindi', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Gujar Khan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kahuta', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kallar Syedan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Taxila', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Daultala', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Murree')->first();
        Tehsil::create(['name' => 'Kotli Sattian', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Murree', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Okara')->first();
        Tehsil::create(['name' => 'Depalpur', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Okara', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Renala Khurd', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Pakpattan')->first();
        Tehsil::create(['name' => 'Arifwala', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Pakpattan', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Sahiwal')->first();
        Tehsil::create(['name' => 'Chichawatni', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sahiwal', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Khushab')->first();
        Tehsil::create(['name' => 'Khushab', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Noorpur Thal', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Quaidabad', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Naushera(Wadi-e-Soon)', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Sargodha')->first();
        Tehsil::create(['name' => 'Bhalwal', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Bhera', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kot Momin', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sahiwal', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sargodha', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Shahpur', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sillanwali', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Chiniot')->first();
        Tehsil::create(['name' => 'Bhowana', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Chiniot', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Lalian', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Faisalabad')->first();
        Tehsil::create(['name' => 'Chak Jhumra', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Faisalabad City', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Faisalabad Sadar', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Jaranwala', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Samundri', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Tandlianwala', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Jhang')->first();
        Tehsil::create(['name' => 'Jhang', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Shorkot', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Ahmadpur Sial', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Athara Hazari', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Gujranwala')->first();
        Tehsil::create(['name' => 'Gujranwala City', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Gujranwala Saddar', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kamoke', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Nowshera Virkan', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Narowal')->first();
        Tehsil::create(['name' => 'Narowal', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Shakargarh', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Zafarwal', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Sialkot')->first();
        Tehsil::create(['name' => 'Daska', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Pasrur', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sambrial', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sialkot', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Gujrat')->first();
        Tehsil::create(['name' => 'Gujrat', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kharian', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sarai Alamgir', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Jalalpur Jattan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kunjah', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Hafizabad')->first();
        Tehsil::create(['name' => 'Hafizabad', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Pindi Bhattian', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Mandi Bahauddin')->first();
        Tehsil::create(['name' => 'Malakwal', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mandi Bahauddin', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Phalia', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Wazirabad')->first();
        Tehsil::create(['name' => 'Wazirabad', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Ali Pur Chatta', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Kasur')->first();
        Tehsil::create(['name' => 'Chunian', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kasur', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kot Radha Kishan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Pattoki', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Lahore')->first();
        Tehsil::create(['name' => 'Lahore Cantonment', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Lahore City', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Model Town', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Raiwind', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Shalimar', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Sheikhupura')->first();
        Tehsil::create(['name' => 'Ferozewala', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Muridke', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Safdarabad', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sheikhupura', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sharak Pur', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Bhakkar')->first();
        Tehsil::create(['name' => 'Bhakkar', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Darya Khan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kaloorkot', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mankera', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Mianwali')->first();
        Tehsil::create(['name' => 'Isakhel', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mianwali', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Piplan', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Khanewal')->first();
        Tehsil::create(['name' => 'Jahanian', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kabirwala', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Khanewal', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mian Channu', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Rahimya', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Lodhran')->first();
        Tehsil::create(['name' => 'Dunyapur', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kahror Pacca', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Lodhran', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Multan')->first();
        Tehsil::create(['name' => 'Jalalpur Pirwala', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Multan City', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Multan Saddar', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Shujabad', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Vehari')->first();
        Tehsil::create(['name' => 'Burewala', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Mailsi', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Vehari', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Bahawalnagar')->first();
        Tehsil::create(['name' => 'Bahawalnagar', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Chishtian', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Fort Abbas', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Haroonabad', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Minchinabad', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Bahawalpur')->first();
        Tehsil::create(['name' => 'Ahmadpur East', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Bahawalpur City', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Bahawalpur Saddar', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Hasilpur', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Khairpur Tamewali', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Yazman', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Rahim Yar Khan')->first();
        Tehsil::create(['name' => 'Liaqatpur', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Rahim Yar Khan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Sadiqabad', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Dera Ghazi Khan')->first();
        Tehsil::create(['name' => 'Dera Ghazi Khan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'De-Excluded Area D.G. Khan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Kot Chutta', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Layyah')->first();
        Tehsil::create(['name' => 'Chaubara', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Karor Lal Esan', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Layyah', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Muzaffargarh')->first();
        Tehsil::create(['name' => 'Alipur', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Jatoi', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Muzaffargarh', 'district_id' => $district->id]);
        
        
        $district = \App\Models\District::where('name', 'Taunsa')->first();
        Tehsil::create(['name' => 'Taunsa', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Koh-e-Suleman', 'district_id' => $district->id]);
        Tehsil::create(['name' => 'Vehova', 'district_id' => $district->id]);
        
        $district = \App\Models\District::where('name', 'Islamabad')->first();
        Tehsil::create(['name' => 'Islamabad', 'district_id' => $district->id]);
        





    }
}
