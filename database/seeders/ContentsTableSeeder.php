<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'content_id' => 1,
            'master_id' => 1,
            'menu' => 'カット',
            'price' => '3800',
            'time' => '1時間',
        ];
        DB::table('contents')->insert($param);

        $param = [
            'content_id' => 2,
            'master_id' => 1,
            'menu' => 'カット（中学生～高校生）',
            'price' => '2000',
            'time' => '1時間',
        ];
        DB::table('contents')->insert($param);

        $param = [
            'content_id' => 3,
            'master_id' => 1,
            'menu' => 'カット（小学生以下）',
            'price' => '1000',
            'time' => '1時間',
        ];
        DB::table('contents')->insert($param);

        $param = [
            'content_id' => 4,
            'master_id' => 1,
            'menu' => '前髪カット',
            'price' => '800',
            'time' => '30分',
        ];
        DB::table('contents')->insert($param);

        $param = [
            'content_id' => 5,
            'master_id' => 2,
            'menu' => 'ファッションカラー',
            'price' => '6000',
            'time' => '2時間',
        ];
        DB::table('contents')->insert($param);

        $param = [
            'content_id' => 6,
            'master_id' => 2,
            'menu' => 'ベーシックカラー（白髪染め）',
            'price' => '6000',
            'time' => '2時間',
        ];
        DB::table('contents')->insert($param);

        $param = [
            'content_id' => 7,
            'master_id' => 2,
            'menu' => '黒染め',
            'price' => '6000',
            'time' => '2時間',
        ];
        DB::table('contents')->insert($param);

        $param = [
            'content_id' => 8,
            'master_id' => 2,
            'menu' => 'リタッチ',
            'price' => '4000',
            'time' => '1時間30分',
        ];
        DB::table('contents')->insert($param);

        $param = [
            'content_id' => 9,
            'master_id' => 3,
            'menu' => 'パーマ',
            'price' => '6500',
            'time' => '2時間',
        ];
        DB::table('contents')->insert($param);

        $param = [
            'content_id' => 10,
            'master_id' => 3,
            'menu' => '顔剃り',
            'price' => '3000',
            'time' => '40分',
        ];
        DB::table('contents')->insert($param);

        $param = [
            'content_id' => 11,
            'master_id' => 3,
            'menu' => 'ヘッドスパ',
            'price' => '1800',
            'time' => '30分',
        ];
        DB::table('contents')->insert($param);

        $param = [
            'content_id' => 12,
            'master_id' => 3,
            'menu' => '商品購入のみ',
            'price' => '0',
            'time' => '0',
        ];
        DB::table('contents')->insert($param);
    }
}
