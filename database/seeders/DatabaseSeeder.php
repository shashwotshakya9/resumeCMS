<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            PagesTableSeeder::class
        ]);

        
        \Illuminate\Support\Facades\DB::table('tbl_introductions')->insert([        
            'fullname' => 'Ben Wilson',
            'dob' => '26 September 1999',
            'email' => 'hello@company.co',
            'intro' => 'Hello, I am Ben.',
            'image' => '1606288979.jpg',            
            'website' => 'www.company.co',
            'created_at' => '2020-11-24 06:03:28'          
        ]);
    }
    
    }

