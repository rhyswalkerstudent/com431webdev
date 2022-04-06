<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ReflectionSeeder extends Seeder
{   
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reflections')->insert(
            [
                'longtext' => "No reflections have been included where a reflections section or paragraph was expected/required",
            ]);
        DB::table('reflections')->insert(
            [
                'longtext' => "Reflections are presented in the form of a diary.",
            ]);
        DB::table('reflections')->insert(
            [
                'longtext' => "The reflections section is trivial in nature and adds little value to the document.",
            ]);
        DB::table('reflections')->insert(
            [
                'longtext' => "The reflections included are largely experiential in nature but do not focus sufficiently on the learning experience through the work and discoveries and aspects of enlightenment that have arisen along the way."
            ]);
            DB::table('reflections')->insert(
            [
                'longtext' => "The reflections have been utilised for the wrong purpose e.g. conclusions have been presented under the heading of reflections; this section includes complaints arising from the related work and perceived load.",
            ]);
    }
}
