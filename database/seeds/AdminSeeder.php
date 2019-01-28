<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin Row insert
        \App\Models\Admin\Admin::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
        ]);

        // Ticket Type Row insert
        $array = ['Business', 'Normal', 'AC', 'Non-AC', 'Standing'];
        for($i=0; $i<sizeof($array); $i++){
            \App\Models\TicketClass\TicketClass::create([
                'name' => $array[$i],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }        

        // Room Categories Row insert
        $arr = ['Single', 'Double', 'Family', 'Honeymoon', 'Multiple Room'];
        for($j=0; $j<sizeof($arr); $j++){
            \App\Models\RoomCategory\RoomCategory::create([
                'name' => $arr[$j],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }    

        // // hospital  Row insert
        // $arr = ['Apollo Hospitals, Chennai', 'Nithra Institute of Sleep Sciences, Chennai', 'Ruby General Hospital, Kolkata', 'Kokilaben Dhirubhai Ambani Hospital and Medical Research Center', ' AMRI MEDICAL CENTER, Kolkata'];
        // for($j=0; $j<sizeof($arr); $j++){
        //     \App\Models\Hospital\Hospital::create([
        //         'state_id' => $j+1,
        //         'user_id' => $j+1,
        //         'name' => $arr[$j],
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }        
    }
}
