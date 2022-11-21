<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampusCircleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campus_circle')->insert (
            [
                [
                    'circle_id' => '1',
                    'campus_id' => '1',
                ],
                [
                    'circle_id' => '2',
                    'campus_id' => '2',
                ],
                [
                    'circle_id' => '2',
                    'campus_id' => '3',
                ],
                [
                    'circle_id' => '3',
                    'campus_id' => '2',
                ],
                [
                    'circle_id' => '4',
                    'campus_id' => '2',
                ],
                [
                    'circle_id' => '4',
                    'campus_id' => '1',
                ],
            ]
        );
    }
}