<?php

use Illuminate\Database\Seeder;
use Symfony\Component\Console\Helper\Table;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0 ; $i <10 ; $i ++){
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'images'=>'default.jpg',
                'password' => bcrypt('password'),
            ]);
        }

    }
}
