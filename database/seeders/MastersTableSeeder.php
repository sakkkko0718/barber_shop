<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MastersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'master_id' => 1,
            'type' => 'カット',
        ];
        DB::table('masters')->insert($param);

        $param = [
            'master_id' => 2,
            'type' => 'カラー',
        ];
        DB::table('masters')->insert($param);

        $param = [
            'master_id' => 3,
            'type' => 'その他',
        ];
        DB::table('masters')->insert($param);
    }
}
