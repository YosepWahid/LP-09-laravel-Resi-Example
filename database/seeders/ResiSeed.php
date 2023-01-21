<?php

namespace Database\Seeders;

use App\Models\Resi;
use Illuminate\Database\Seeder;

class ResiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resi::factory(500)->create();
    }
}
