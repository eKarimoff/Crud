<?php

use Database\Seeders\CompanySeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
          // CompanySeeder::class,
          UserSeeder::class,
        ]);
    }
}
