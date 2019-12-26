<?php

use Illuminate\Database\Seeder;

class bencanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create(); //import library faker

        $limit = 5; //batasan berapa banyak data
        for ($i = 0; $i < $limit; $i++) {
            DB::table('bencanas')->insert([ //mengisi datadi database
        'id_bencana' => $faker->unique()->randomNumber($nbDigits = NULL, $strict = false) ,
                'nama_bencana' => $faker->word,
                'lokasi' => $faker->city,
                'jumlah_tim' => $faker->randomNumber,
            ]);
    }
}}
