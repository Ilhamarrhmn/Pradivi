<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'Damkar',
               'email'=>'damkar@gmail.com',
               'type'=> 'damkar',
               'password'=> bcrypt('123'),
            ],
            [
               'name'=>'RSUD',
               'email'=>'rsud@gmail.com',
               'type'=> 'rsud',
               'password'=> bcrypt('123'),
            ],
            [
               'name'=>'bpbd',
               'email'=>'bpbd@gmail.com',
               'type'=> 'bpbd',
               'password'=> bcrypt('123'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
