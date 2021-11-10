<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710026',
            'name' => 'Aisyah Ulil Maulina',
            'class' => 'MI2F',
            'departemen' => 'JTI',
            'phone_number' => '08980571729',
        ]);

        DB::table('students')->insert([
            'nim' => '2031710132',
            'name' => 'Aria Putra Pamungkas',
            'class' => 'MI2F',
            'departemen' => 'JTI',
            'phone_number' => '085234222000',
        ]);

        DB::table('students')->insert([
            'nim' => '2031710312',
            'name' => 'Dafi Azka Banurella',
            'class' => 'MI2F',
            'departemen' => 'JTI',
            'phone_number' => '087890012333',
        ]);
    }
}
