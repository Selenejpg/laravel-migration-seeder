<?php

use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();

        $train -> azienda = 'Trenitalia';
        $train -> data_viaggio = '2022-05-26'; 
        $train -> stazione_partenza = 'Venezia';
        $train -> stazione_arrivo = 'Udine';
        $train -> orario_partenza = '14:00:00';
        $train -> orario_arrivo = '15:00:00';
        $train -> codice_treno = 12335;
        $train -> n_carrozze = 5;
        $train -> on_time = true;
        $train -> cancelled = false;
        $train -> data_partenza = 'oggi';
        $train -> save();
    
    
        $train = new Train();

        $train -> azienda = 'Trenord';
        $train -> data_viaggio = '2022-05-27'; 
        $train -> stazione_partenza = 'Trento';
        $train -> stazione_arrivo = 'Verona';
        $train -> orario_partenza = '09:00:00';
        $train -> orario_arrivo = '10:00:00';
        $train -> codice_treno = 23523;
        $train -> n_carrozze = 4;
        $train -> on_time = false;
        $train -> cancelled = true;
        $train -> data_partenza = 'oggi';
        $train -> save();
    
    }




    
}


