<?php

use Illuminate\Database\Seeder;

class GreetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Greeting::create([
            "body" => "Hello World"
        ]);
    }
}
