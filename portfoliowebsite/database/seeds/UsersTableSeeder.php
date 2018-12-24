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


    Public function setPasswordAttribute($password)
    {
        return $this->attributes['password'] = bcrypt($password);
    }

    public function run()
    {
        $user = new User([
            'username' => 'admin',
            'password' => bcrypt('123456'),
            'name' => 'admin',
            'email' => 'admin@example.be'
        ]);
        $user->save();
        $user = new User([
            'username' => 'gebruiker',
            'password' => bcrypt('67890'),
            'name' => 'gebruiker',
            'email' => 'gebruiker@example.be'
        ]);
        $user->save();
    }
}
