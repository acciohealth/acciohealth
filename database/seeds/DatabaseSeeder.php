<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TestsTableSeeder::class);
        $this->call(MeasuresTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(OptionsTableSeeder::class);
    }
}
