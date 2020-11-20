<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::find(1);

        Page::truncate();

        $admin->pages()->saveMany([
            new Page([
                'title' => 'About',
                'url' => '/about',
                'content' =>'this is about us'
            ]),

            new Page([
                'title' => 'Contact',
                'url' => '/contact',
                'content' =>'this is contact us'
            ]),
            new Page([
                'title' => 'Reviews',
                'url' => '/reviews',
                'content' =>'this is reviews'
            ])
        ]);
    }
}
