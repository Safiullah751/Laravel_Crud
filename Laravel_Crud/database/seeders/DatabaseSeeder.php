<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();
    //    $this->call(ProuductSeeder::class);
              \App\Models\product::factory(10)->create();

    }
}
