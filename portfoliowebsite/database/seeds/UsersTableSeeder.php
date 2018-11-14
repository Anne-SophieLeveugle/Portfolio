<?php

use App\User;
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
        $user = new User([
            'name' => 'admin',
            'password' => '12345'
        ]);
        $user->save();
        $user = new User([
            'name' => 'gebruiker',
            'password' => '67890'
        ]);
        $user->save();
    }
}
