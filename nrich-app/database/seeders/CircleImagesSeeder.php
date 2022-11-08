<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\CircleImage;

class CircleImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('circle_images')->insert (
            [
                ['circle_id' => 1],
                ['hero_img' => 'ギタークラブ_hero.jpeg'],
                ['img1' => 'ギタークラブ_1.jpeg'],
                ['img2' => 'ギタークラブ_2.jpeg'],
                ['img3' => 'ギタークラブ_3.jpeg'],
            ]
    }
}