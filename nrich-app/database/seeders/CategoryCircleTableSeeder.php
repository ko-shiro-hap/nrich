<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryCircleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_circle')->insert (
            [
                [
                    'circle_id' => '1',
                    'category_id' => '1',
                ],
                [
                    'circle_id' => '1',
                    'category_id' => '4',
                ],
                [
                    'circle_id' => '2',
                    'category_id' => '2',
                ],
                [
                    'circle_id' => '2',
                    'category_id' => '5',
                ],
                [
                    'circle_id' => '3',
                    'category_id' => '2',
                ],
                [
                    'circle_id' => '3',
                    'category_id' => '6',
                ],
                [
                    'circle_id' => '4',
                    'category_id' => '2',
                ],
                [
                    'circle_id' => '4',
                    'category_id' => '7',
                ],
            ]
        );
    }
}
