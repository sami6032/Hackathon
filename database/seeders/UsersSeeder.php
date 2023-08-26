<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            User::create([
                'name'=>'User',
                'email'=>'user@itsolutionstuff.com',
                 'is_admin'=>'0',
                'password'=> bcrypt('123456'),
 
            ]);
            User::create([
                'name'=>'Admin',
                'email'=>'admin@itsolutionstuff.com',
                 'is_admin'=>'1',
                'password'=> bcrypt('123456'),
            ]);
            User::create([
                'name'=>'Managerr',
                'email'=>'manager@itsolutionstuff.com',
                 'is_admin'=>'2',
                'password'=> bcrypt('123456'),
 
            ]);
  } 
}
