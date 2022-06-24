<?php

namespace Database\Seeders;

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
        \App\Models\user::factory(10)->create();
        \App\Models\admins::factory(10)->create();
        \App\Models\productos::factory(10)->create();
        \App\Models\categorias::factory(10)->create();

    }
}
