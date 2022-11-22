<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CharacteristicCircleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characteristic_circle')->insert (
            [
                [
                    'circle_id' => '1',
                    'characteristic_id' => '1',
                ],
                [
                    'circle_id' => '2',
                    'characteristic_id' => '3',
                ],
                [
                    'circle_id' => '2',
                    'characteristic_id' => '1',
                ],
                [
                    'circle_id' => '3',
                    'characteristic_id' => '5',
                ],
                [
                    'circle_id' => '4',
                    'characteristic_id' => '6',
                ],
                [
                    'circle_id' => '5',
                    'characteristic_id' => '2',
                ],
                [
                    'circle_id' => '5',
                    'characteristic_id' => '7',
                ],
            ]
        );
    }
}
