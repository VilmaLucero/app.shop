<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Vilma',
            'email' => 'vilmalucero06@gmail.com',
            'password' => bcrypt('gclvgclv'),
            'admin' => true
        ]);
    }
}
