<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ReferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('references')->insert(
            [
                'title' => "No reference citation has been included.",
            ]);
        DB::table('references')->insert(
            [
                'title' => "There has been insufficient referencing.",
            ]);
        DB::table('references')->insert(
            [
                'title' => "The mix of reference material is out of balance e.g. excessive use of URL based references; little or no academic journal citation; insufficient textbook citation; inappropriate reference material for the work involved; insufficient technical citation such as BSI or IEC documents or other regulatory documents.",
            ]);
        DB::table('references')->insert(
            [
                'title' => "Expected referencing conventions have not been followed e.g. the Harvard system has not been used; embedded citations are incorrectly indicated or otherwise faulty, such as incomplete or wrongly mapped in the document."
            ]);
        DB::table('references')->insert(
        [
            'title' => "Specific references in the respective list(s) have not included sufficient levels of detail.",
        ]);
        DB::table('references')->insert(
        [
            'title' => "One or more references have been ‘over-played’ in citation.",
        ]);
        DB::table('references')->insert(
        [
            'title' => "Important and relevant references have been overlooked or omitted.",
        ]); 
        DB::table('references')->insert(
        [
            'title' => "The scope of the included references is not broad enough.",
        ]);
    }
}
