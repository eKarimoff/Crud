<?php

use Database\Seeders\CompanySeeder;
use Illuminate\Database\Seeder;
use App\Models\Post;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      \App\Models\Post::factory(10)->create();
       
    }
}
