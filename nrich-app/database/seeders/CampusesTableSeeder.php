<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campuses')->insert (
            [
                [
                    'campus' => '商学部(世田谷)',
                    'university_id' => 1,
                ],
                [
                    'campus' => '文理学部(世田谷)',
                    'university_id' => 1,

                ],
                [
                    'campus' => '三軒茶屋',
                    'university_id' => 1,

                ],
            ]
        );
    }
}
