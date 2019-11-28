<?php

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attributes')->insert([
            'name' => 'Douches'
        ]);

        DB::table('attributes')->insert([
            'name' => 'Zwembad'
        ]);

        DB::table('attributes')->insert([
            'name' => 'Yoga'
        ]);

        DB::table('attributes')->insert([
            'name' => 'Persoonlijke begeleiding'
        ]);

        DB::table('attributes')->insert([
            'name' => 'Cafetaria'
        ]);

        DB::table('attributes')->insert([
            'name' => 'Groeps lessen'
        ]);
    }
}
