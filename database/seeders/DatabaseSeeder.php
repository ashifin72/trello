<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\AshDesks\Database\Seeders\AshDesksDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AshDesksDatabaseSeeder::class);
    }
}
