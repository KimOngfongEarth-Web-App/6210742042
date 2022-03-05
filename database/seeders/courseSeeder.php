<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class courseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
            'title' => 'db',
            'content' => 'database'
            ],
            [
                'title' => 'publish',
                'content' => 'what the fuck'
                ],
                
            
        ]);
    }
}
