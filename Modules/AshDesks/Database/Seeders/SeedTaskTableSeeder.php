<?php

namespace Modules\AshDesks\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\AshDesks\Entities\Task;

class SeedTaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::factory()->count(100)->create();
    }
}
