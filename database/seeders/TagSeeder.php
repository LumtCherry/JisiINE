<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([
                'name' => '肉料理'
         ]);
         DB::table('tags')->insert([
                'name' => '魚料理'
         ]);
         
         DB::table('tags')->insert([
                'name' => '汁物'
         ]);
         
         DB::table('tags')->insert([
                'name' => '麺類'
         ]);
         
         DB::table('tags')->insert([
                'name' => 'デザート'
         ]);
    }
}
