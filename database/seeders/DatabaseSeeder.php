<?php

use Database\Seeders\CompanySeeder;
use Illuminate\Database\Seeder;
use App\Models\Company;

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
          CompanySeeder::class,
        ]);
    }
}
