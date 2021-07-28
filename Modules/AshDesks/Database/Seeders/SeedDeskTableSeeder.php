<?php

namespace Modules\AshDesks\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\AshDesks\Entities\Desk;

class SeedDeskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Desk::factory()->count(10)->create();
    }
}
