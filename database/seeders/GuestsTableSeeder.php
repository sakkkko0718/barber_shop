<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $param = [
            'name' => '山田太郎',
            'address' => '奈良県堺市',
            'email' => 'dummy@example.com',
            'tel' => '09012345678',
        ];
        DB::table('guests')->insert($param);

        $param = [
            'name' => '田中一郎',
            'address' => '大阪府城陽市',
            'email' => 'tanaka16@example.com',
            'tel' => '09023456789',
        ];
        DB::table('guests')->insert($param);
    }
}
