<?php

use Illuminate\Database\Seeder;

class RegisterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10; $i++)
        {
            DB::table('registers')->insert([
                'address' => Str::random(10),
                'payment' => Str::random(10),
                
            ]);
        }
    }
}
