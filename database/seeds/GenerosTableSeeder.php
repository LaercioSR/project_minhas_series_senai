<?php

use Illuminate\Database\Seeder;

class GenerosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('generos')->insert([
            'nome' => 'Comédia'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Drama'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Ficção Científica'
        ]);

        DB::table('generos')->insert([
            'nome' => 'Suspense'
        ]);
    }
}
