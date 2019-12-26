<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(relawanSeeder::class);
        $this->call(timSeeder::class);
        $this->call(bencanaSeeder::class);
    }
}
