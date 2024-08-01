<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;


class faquserseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        //
        $conn = 'faqdb';
        DB::connection($conn)->table('faqoption')->truncate();

        for($i=0;$i<100;$i++){
            DB::connection($conn)->table('faqoption')->insert([
                'option' => $faker->sentence,
            ]);
        }
    }
}
