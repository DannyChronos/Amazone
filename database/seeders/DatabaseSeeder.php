<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('admins')->insert([
            'id' => 'Admin01',
            'nom_complet' => 'John Doe',
            'email' => 'john@gmail.com',
            'password' => Hash::make('cortana4002')
        ]);

        DB::table('article_categories')->insert(
            [
                [
                    'id_categorie' => 'homme',
                    'nom_categorie' => 'homme'
                ],
                [
                    'id_categorie' => 'femme',
                    'nom_categorie' => 'femme'
                ],
                [
                    'id_categorie' => 'accessoire',
                    'nom_categorie' => 'accessoire'
                ]
            ]
        );
    }
}
