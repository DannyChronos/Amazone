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
            'id_admin' => 'Admin01',
            'nom_complet' => 'John Doe',
            'password' => Hash::make('cortana4002')
        ]);

        DB::table('article_categories')->insert(
            [
                [
                    'nom_categorie' => 'homme'
                ],
                [
                    'nom_categorie' => 'femme'
                ],
                [
                    'nom_categorie' => 'accessoire'
                ]
            ]
        );
    }
}
