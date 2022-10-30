<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\CircleImage;

class CircleImagesTableSeeder extends Seeder
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
                [
                    'circle_id' => 1,
                    'hero_img' => 'ギタークラブ_hero.jpeg',
                    'img1' => 'ギタークラブ_1.jpeg',
                    'img2' => 'ギタークラブ_2.jpeg',
                    'img3' => 'ギタークラブ_3.jpeg',
                ],
                [
                    'circle_id' => 2,
                    'hero_img' => 'スポトピ_hero.jpeg',
                    'img1' => 'スポトピ_1.jpeg',
                    'img2' => 'スポトピ_2.jpeg',
                    'img3' => 'スポトピ_3.jpeg',
                ],
                [
                    'circle_id' => 3,
                    'hero_img' => 'スポーツチャンバラ剣隼会_hero.jpeg',
                    'img1' => 'スポーツチャンバラ剣隼会_1.jpeg',
                    'img2' => 'スポーツチャンバラ剣隼会_2.jpeg',
                    'img3' => 'スポーツチャンバラ剣隼会_3.jpeg',
                ],
                [
                    'circle_id' => 4,
                    'hero_img' => 'KatZwei_hero.jpeg',
                    'img1' => 'KatZwei_1.jpeg',
                    'img2' => 'KatZwei_2.jpeg',
                    'img3' => 'KatZwei_3.jpeg',
                ],
            ]
        );
    }
}