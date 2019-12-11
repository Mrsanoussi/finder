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
            'name' => 'Basicfit',
            'url' => 'https://www.basic-fit.com/'
        ]);

        DB::table('brands')->insert([
            'name' => 'Fit for Free',
            'url' => 'https://www.fitforfree.nl/'
        ]);

        DB::table('brands')->insert([
            'name' => 'David Lloyd',
            'url' => 'https://www.davidlloyd.nl/'
        ]);

        DB::table('brands')->insert([
            'name' => 'The Fitness Lounge',
            'url' => 'https://www.thefitnesslounge.nl/'
        ]);

        DB::table('brands')->insert([
            'name' => 'MyLife',
            'url' => 'https://www.mylife.nl/'
        ]);
    }
}
