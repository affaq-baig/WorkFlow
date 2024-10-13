<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name"=>"Project Manager",
            "email"=> "admin@gmail.com",
            "role_id"=> Role::find(1)->id,
            "password"=> Hash::make("12345678"),
            "phone"=> "03155687559"
        ]);
    }
}
