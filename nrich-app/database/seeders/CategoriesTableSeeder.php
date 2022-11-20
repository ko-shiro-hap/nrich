<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert (
            [
                [
                    'category' => '音楽',
                ],
                [
                    'category' => 'スポーツ',
                ],
                [
                    'category' => '文化',
                ],
                [
                    'category' => 'ギター',
                ],
                [
                    'category' => 'テニス',
                ],
                [
                    'category' => 'チャンバラ',
                ],
                [
                    'category' => 'サッカー',
                ],
            ]
        );
    }
}
