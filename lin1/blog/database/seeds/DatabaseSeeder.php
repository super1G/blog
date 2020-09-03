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
        DB::table('users')->insert([
            
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'api_token' =>str_random(10),
        ]);
    }
}
