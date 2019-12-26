<?php

use Illuminate\Database\Seeder;

class relawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create(); //import library faker

        $limit = 5; //batasan berapa banyak data

        for ($i = 0; $i < $limit; $i++) {
            DB::table('relawans')->insert([ //mengisi datadi database
                'id_relawan' => $faker->unique()->randomNumber($nbDigits = NULL, $strict = false) ,
                'nama' => $faker->name,
                'status' => "Tersedia", 
                'email' => $faker->unique()->email,
                'nohp' => $faker->phoneNumber,
                'keahlian' => $faker->jobTitle,
                'alamat' => $faker->address,
                'usia' => $faker->randomNumber,
                'tim' => " ",
            ]);
        }
    }
}
