<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CharacteristicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characteristics')->insert (
            [
                [
                    'characteristic' => '初心者歓迎',
                ],
                [
                    'characteristic' => '経験者歓迎',
                ],
                [
                    'characteristic' => '兼サー',
                ],
                [
                    'characteristic' => 'アットホーム',
                ],
                [
                    'characteristic' => 'マイナー',
                ],
                [
                    'characteristic' => 'フットサル',
                ],
                [
                    'characteristic' => '競技プログラミング',
                ],
            ]
        );
    }
}
