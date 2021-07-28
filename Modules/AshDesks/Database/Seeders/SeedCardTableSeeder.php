<?php

namespace Modules\AshDesks\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\AshDesks\Entities\Card;

class SeedCardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Card::factory()->count(30)->create();
    }
}
