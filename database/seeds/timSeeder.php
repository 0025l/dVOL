<?php

use Illuminate\Database\Seeder;

class timSeeder extends Seeder
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
            DB::table('tims')->insert([ //mengisi datadi database
        'id_tim' => $faker->unique()->randomNumber($nbDigits = NULL, $strict = false) ,
                'nama_tim' => $faker->word,
                'id_bencana' => $faker->randomNumber,
                'jumlah_anggota' => 0,
            ]);
    }
}
}
