<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Admin::updateOrCreate(
            [
                'email' => 'admin@gmail.com',
                'name' => 'admin',
                'password' => Hash::make('12345678'),
                'image' => 'images/user_images/default.png',

            ]);

    }
}
