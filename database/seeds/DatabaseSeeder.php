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
         $this->call(ChannelTableSeeder::class);
         $this->call(ProgrammeInformationTableSeeder::class);
         $this->call(ProgrammeTimeTableSeeder::class);
    }
}
