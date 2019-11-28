<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name' => 'Basicfit'
        ]);

        DB::table('brands')->insert([
            'name' => 'Fit for Free'
        ]);

        DB::table('brands')->insert([
            'name' => 'David Lloyd'
        ]);

        DB::table('brands')->insert([
            'name' => 'The Fitness Lounge'
        ]);

        DB::table('brands')->insert([
            'name' => 'MyLife'
        ]);
    }
}
