<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('name','admin')->first();
        $authorRole = Role::where('name','author')->first();
    
        User::truncate();
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);
    
        $shashwot = User::create([
            'name' => 'Shashwot',
            'email' => 'shashwot@test.com',
            'password' => bcrypt('password')
        ]);

        $admin->roles()->attach($adminRole);
        $shashwot->roles()->attach($authorRole);
    }
}
