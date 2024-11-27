<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShrinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shrines')->insert([
            [
                'name' => 'Shrine of Virgilia',
                'image' => 'public/img/Virgilia.jpg',
                'description' => 'The shrine of wisdom.',
            ],
            [
                'name' => 'Shrine of Beatrice',
                'image' => 'public/img/Beatrice.png',
                'description' => 'The shrine of love and truth.',
            ],
            [
                'name' => 'Shrine of Lambdadelta',
                'image' => 'public/img/labdadelta.png',
                'description' => 'The shrine of chaos.',
            ],
            [
                'name' => 'Shrine of Bernkastel',
                'image' => 'public/img/Bernkastel.png',
                'description' => 'The shrine of judgment.',
            ]
        ]);
    }
}
