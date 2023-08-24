<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
            'name' => 'Muhammad Haeikal Syabani',
            'email'=> 'tentacel02@gmail.com',
            'password' => bcrypt('admincrud'),
            'role' => 'admin',
        ]);
    }
}
