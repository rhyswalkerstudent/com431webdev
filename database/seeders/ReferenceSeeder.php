<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ReferenceSeeder extends Seeder
{
    //adding the references from the excel sheet into the database linked with this site

    public function run()
    {
        DB::table('references')->insert(
            [
                'longtext' => "No reference citation has been included.",
            ]);
        DB::table('references')->insert(
            [
                'longtext' => "There has been insufficient referencing.",
            ]);
        DB::table('references')->insert(
            [
                'longtext' => "The mix of reference material is out of balance e.g. excessive use of URL based references; little or no academic journal citation; insufficient textbook citation; inappropriate reference material for the work involved; insufficient technical citation such as BSI or IEC documents or other regulatory documents.",
            ]);
        DB::table('references')->insert(
            [
                'longtext' => "Expected referencing conventions have not been followed e.g. the Harvard system has not been used; embedded citations are incorrectly indicated or otherwise faulty, such as incomplete or wrongly mapped in the document."
            ]);
        DB::table('references')->insert(
        [
            'longtext' => "Specific references in the respective list(s) have not included sufficient levels of detail.",
        ]);
        DB::table('references')->insert(
        [
            'longtext' => "One or more references have been 'over-played' in citation.",
        ]);
        DB::table('references')->insert(
        [
            'longtext' => "Important and relevant references have been overlooked or omitted.",
        ]); 
        DB::table('references')->insert(
        [
            'longtext' => "The scope of the included references is not broad enough.",
        ]);
    }
}
