<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
 
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Garuda Aquatic Admin',
            'email'=>'administrator@aquatic.com',
            'role'=>'administrator',
            'password'=>Hash::make('1234'),
  
        ]);
    }
}
