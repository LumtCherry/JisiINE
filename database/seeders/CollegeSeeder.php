<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('colleges')->insert([
                'college_name' => '北海道大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '東北大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '東京大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '名古屋大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '京都大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '大阪大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '九州大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '早稲田大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '慶應義塾大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '明治大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '青山学院大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '立教大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '中央大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '法政大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '学習院大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '日本大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '東洋大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '駒澤大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '専修大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '大東文化大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '東海大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '亜細亜大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '帝京大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '国士館大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '埼玉大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '信州大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '新潟大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '静岡大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '滋賀大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '関西大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '関西学院大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '同志社大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '立命館大学'
         ]);
        DB::table('colleges')->insert([
                'college_name' => '近畿大学'
         ]);
    }
}
