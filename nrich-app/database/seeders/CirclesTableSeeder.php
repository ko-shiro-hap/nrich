<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Circle;

class CirclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('circles')->insert (
            [
                ['name' => 'ギタークラブ'],
                ['name' => 'スポトピ'],
                ['name' => 'スポーツチャンバラ剣隼会'],
                ['name' => 'KatZwei'],
            ]
        );
    }
}