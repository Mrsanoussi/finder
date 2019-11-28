<?php

use Illuminate\Database\Seeder;
use App\Attribute;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'name' => 'BasicFit',
            'price' => 20
        ]);

        DB::table('items')->insert([
            'name' => 'Fit for Free',
            'price' => 15
        ]);

        DB::table('items')->insert([
            'name' => 'David Lloyd',
            'price' => 45
        ]);

        DB::table('items')->insert([
            'name' => 'The Fitness Lounge',
            'price' => 30
        ]);

        DB::table('items')->insert([
            'name' => 'MyLife',
            'price' => 22
        ]);
    }
}
