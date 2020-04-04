<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'desking2000@gmail.com',
                'is_admin'=>'1',
               'password'=> bcrypt('Yep@2020'),
            ],
            [
               'name'=>'User',
               'email'=>'desking2000@gmail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('hello1234'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
