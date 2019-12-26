<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


         
          DB::table('users')->insert([ //mengisi datadi database
        'id' => 2,
                'email' => 'siapa@uii.gmail.com',
                'password' => '98765',
                'name' => 'lia',
            ]);
    }
}
