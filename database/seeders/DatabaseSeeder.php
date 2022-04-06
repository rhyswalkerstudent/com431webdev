<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    //Seeds the database with the reflection and reference seeders

    public function run()
    {
        $this->call([
            ReflectionSeeder::class,
            ReferenceSeeder::class,
        ]);
    }
}
