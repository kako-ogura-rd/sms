<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student as Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Student::factory(15)->create();
    }
}
