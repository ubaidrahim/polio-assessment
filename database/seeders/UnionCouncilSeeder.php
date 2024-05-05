<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UnionCouncil;

class UnionCouncilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tehsil = \App\Models\Tehsil::where('name', 'Lahore Cantonment')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Lahore City')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Model Town')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Raiwind')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Shalimar')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Multan City')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Multan Saddar')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Shujabad')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Burewala')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Vehari')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Attock')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Hassan Abdal')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Chakwal')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Dina')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Jhelum')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Rawalpindi')->first();
        UnionCouncil::create(['name' => 'Dhoke Khabba', 'tehsil_id'  => $tehsil->id]);
        UnionCouncil::create(['name' => 'Khurram Colony', 'tehsil_id'  => $tehsil->id]);
        UnionCouncil::create(['name' => 'Mohan Pura', 'tehsil_id'  => $tehsil->id]);
        UnionCouncil::create(['name' => 'Pir Wadhai', 'tehsil_id'  => $tehsil->id]);
        UnionCouncil::create(['name' => 'Raja Bazaar', 'tehsil_id'  => $tehsil->id]);
        UnionCouncil::create(['name' => 'Satellite Town', 'tehsil_id'  => $tehsil->id]);



        $tehsil = \App\Models\Tehsil::where('name', 'Gujar Khan')->first();
        UnionCouncil::create(['name' => 'Tanween', 'tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Bewal', 'tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Bhadana', 'tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Changa Bangial', 'tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Daultala', 'tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Devi, Punjab', 'tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Gujar Khan-I', 'tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Jatli', 'tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Kuri Dolal', 'tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Mandrah', 'tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Missa Keswal', 'tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Mankiala Branmma', 'tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Matwa', 'tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Mohra Noori', 'tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Kauntrila', 'tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Narali', 'tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Punjgran Kalan', 'tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Qazian', 'tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Raman', 'tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Islampura', 'tehsil_id' => $tehsil->id]);
        
        $tehsil = \App\Models\Tehsil::where('name', 'Kahuta')->first();
        UnionCouncil::create(['name' => 'Beor', 'tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Dakhali', 'tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Matore', 'tehsil_id' => $tehsil->id]);


        $tehsil = \App\Models\Tehsil::where('name', 'Kallar Syedan')->first();
        UnionCouncil::create(['name' => 'Bhala Khar','tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Bishandote Union Council','tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Choa Khalsa','tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Doberan Kallan','tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Ghazan Abad','tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Guff, Kallar Syedan','tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Kambili Sadiq','tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Looni Salyal','tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Mangloora Union Council','tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Manyanda','tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Mera Sangal','tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Mirza Kambili','tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Nala Musalmana','tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Samote Union Council','tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Tal Tota','tehsil_id' => $tehsil->id]);
        
        $tehsil = \App\Models\Tehsil::where('name', 'Taxila')->first();
        UnionCouncil::create(['name' => 'Ghari Afghanan','tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Wah Cantonment','tehsil_id' => $tehsil->id]);


        $tehsil = \App\Models\Tehsil::where('name', 'Faisalabad City')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Faisalabad Sadar')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Narowal')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Zafarwal')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Daska')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Sialkot')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Gujrat')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Kharian')->first();
        
        $tehsil = \App\Models\Tehsil::where('name', 'Hangu')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Karak')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Kohat')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Kotli Sattian')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Murree')->first();
        
        
        $tehsil = \App\Models\Tehsil::where('name', 'Abbottabad')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Havelian')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Lora')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Batagram')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Ghazi')->first();
        UnionCouncil::create(['name' => 'Ghazi','tehsil_id' => $tehsil->id]);

        $tehsil = \App\Models\Tehsil::where('name', 'Haripur')->first();
        UnionCouncil::create(['name' => 'Haripur Central','tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Haripur North','tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Haripur South','tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Khalabat Township','tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Sikandarpur','tehsil_id' => $tehsil->id]);
        UnionCouncil::create(['name' => 'Sarai Saleh','tehsil_id' => $tehsil->id]);


        $tehsil = \App\Models\Tehsil::where('name', 'Bala Kot')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Mansehra')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Oghi')->first();
        
        
        $tehsil = \App\Models\Tehsil::where('name', 'Sukkur')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Mardan')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Charsadda')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Jehangira')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Nowshera')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Badbher')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Chamkani')->first();
        
        
        $tehsil = \App\Models\Tehsil::where('name', 'Peshawar City')->first();
        
        
        $tehsil = \App\Models\Tehsil::where('name', 'Shah Alam')->first();
        
        
        $tehsil = \App\Models\Tehsil::where('name', 'Korangi Town')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Landhi Town')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Shah Faisal Town')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Keamari Town')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Baldia Town')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'S.I.T.E. Town')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Bin Qasim Town')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Malir Town')->first();
        
        
        $tehsil = \App\Models\Tehsil::where('name', 'Gulberg Town')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Liaquatabad Town')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'North Nazimabad Town')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Nazimabad')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'North Karachi')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Gulistan-e-Jouhar (G-E-J)')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Gulshan Town')->first();
        
        
        $tehsil = \App\Models\Tehsil::where('name', 'Lyari Town')->first();
        
        
        $tehsil = \App\Models\Tehsil::where('name', 'Saddar Town')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Orangi Town')->first();
        
        
        $tehsil = \App\Models\Tehsil::where('name', 'Chiltan')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Zarghoon')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Panjpai')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Sadar')->first();


        $tehsil = \App\Models\Tehsil::where('name', 'Chaman')->first();





        $tehsil = \App\Models\Tehsil::where('name', 'Islamabad')->first();


    }
}
