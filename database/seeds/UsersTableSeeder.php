<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Sudaraka Jayathilaka',
            'username' => 'sudaraka',
            'password' => bcrypt('1234'),
        ]);

        DB::table('type')->insert([
            'type'=>'BLOOD SUGAR SERIES TEST(6 Samples)'
        ]);

        DB::table('type')->insert([
            'type'=>'BLOOD SUGAR SERIES TEST(4 Samples)'
        ]);
        DB::table('type')->insert([
            'type'=>'BLOOD SUGAR SERIES TEST(3 Samples)'
        ]);
    }
}
