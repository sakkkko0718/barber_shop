<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'reservation_id' => 1,
            'guest_id' => 1,
            'day' => 2024-02-01,
            'startTime' => 13-00-00,
        ];
        DB::table('reservations')->insert($param);
    }
}
