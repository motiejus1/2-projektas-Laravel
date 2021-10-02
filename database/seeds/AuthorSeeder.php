<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uzpildysim duomenu baze 1 irasu
        DB::table('authors')->insert([
            'name' => "Vardas" , // sugeneruos teksta 12 simboliu
            'surname' => "Pavarde" , /// sugeneruos teksta 15 simboliu
            'username' => "Slapyvardis" // sugeneruos teksta 17 simboliu
        ]);
    }
}
