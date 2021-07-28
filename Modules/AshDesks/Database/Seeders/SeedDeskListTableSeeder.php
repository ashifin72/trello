<?php

namespace Modules\AshDesks\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\AshDesks\Entities\DeskList;

class SeedDeskListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DeskList::factory()->count(10)->create();
    }
}
