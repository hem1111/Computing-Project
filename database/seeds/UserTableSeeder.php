<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin::create([
           'name'=>'root',
           'email'=>'admin@example.com',
           'password'=>bcrypt('password')
        ]);
    }
}
