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
            'price' => 20,
            'description' => 'Het maakt niet uit wat je fitnessdoel is, hoe groot of klein, het lukt je bij Basic-Fit. Wij helpen je! Het enige dat je hoeft te doen, is ervoor gaan!',
            'imagepath' => 'https://www.basic-fit.com/on/demandware.static/Sites-BFE-Site/-/default/dw2df550b3/img/basic-fit-logo-squared.jpg',
            'brand_id' => 1
        ]);

        DB::table('items')->insert([
            'name' => 'Fit for Free',
            'price' => 15,
            'description' => 'Het maakt niet uit wat voor sporter je bent. Wij zijn er om je sportwensen vorm te geven en je sportdoelen te bereiken door je op weg te helpen met sporten. Samen zorgen wij voor je ideale sportieve leefstijl, zodat je je thuis voelt.',
            'imagepath' => 'https://cdn.myonlinestore.eu/94031293-6be1-11e9-a722-44a8421b9960/image/cache/full/7c6122feb2ce18a65240788b977180f1d564cc62.jpg',
            'brand_id' => 2
        ]);

        DB::table('items')->insert([
            'name' => 'David Lloyd',
            'price' => 45,
            'description' => 'Bij David Lloyd maakt het niet uit wat je doel is, wij helpen je graag met het waar maken van je doel. Bij een van onze sportscholen kan je op je gemakt een gezonder toekomst tegemoet komen!',
            'imagepath' => 'https://www.wiggleandgiggle.co.uk/wp-content/uploads/2017/12/david-llyod-wiggle-giggle-classes.jpg',
            'brand_id' => 3
        ]);

        DB::table('items')->insert([
            'name' => 'The Fitness Lounge',
            'price' => 30,
            'description' => 'Een maatje minder. Of juist méér – maar dan in spiermassa. Wat je doel ook is, bij The Fitness Lounge gaat het je lukken!',
            'imagepath' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1eFOPLpKigy_ttNvVse-fLDl1XDkSP3coubUnN-ecqZoYKJJN&s',
            'brand_id' => 4
        ]);

        DB::table('items')->insert([
            'name' => 'MyLife',
            'price' => 22,
            'description' => 'Lid worden bij MyLife is perfect voor wie sporten als onderdeel van een uitgebalanceerd leven ziet. Voor wie met partner, familie of vrienden lekker op pad wil naar de sportschool. Voor wie daar vooral plezier in wil hebben. En voor wie een professionele omgeving dan vanzelfsprekend is.',
            'imagepath' => 'https://pbs.twimg.com/profile_images/510149986802094080/bjVmYUbg_400x400.png',
            'brand_id' => 5
        ]);

        DB::table('items')->insert([
            'name' => 'BasicFit',
            'price' => 20,
            'description' => 'Het maakt niet uit wat je fitnessdoel is, hoe groot of klein, het lukt je bij Basic-Fit. Wij helpen je! Het enige dat je hoeft te doen, is ervoor gaan!',
            'imagepath' => 'https://www.basic-fit.com/on/demandware.static/Sites-BFE-Site/-/default/dw2df550b3/img/basic-fit-logo-squared.jpg',
            'brand_id' => 1
        ]);

        DB::table('items')->insert([
            'name' => 'Fit for Free',
            'price' => 15,
            'description' => 'Het maakt niet uit wat voor sporter je bent. Wij zijn er om je sportwensen vorm te geven en je sportdoelen te bereiken door je op weg te helpen met sporten. Samen zorgen wij voor je ideale sportieve leefstijl, zodat je je thuis voelt.',
            'imagepath' => 'https://cdn.myonlinestore.eu/94031293-6be1-11e9-a722-44a8421b9960/image/cache/full/7c6122feb2ce18a65240788b977180f1d564cc62.jpg',
            'brand_id' => 2
        ]);

        DB::table('items')->insert([
            'name' => 'David Lloyd',
            'price' => 45,
            'description' => 'Bij David Lloyd maakt het niet uit wat je doel is, wij helpen je graag met het waar maken van je doel. Bij een van onze sportscholen kan je op je gemakt een gezonder toekomst tegemoet komen!',
            'imagepath' => 'https://www.wiggleandgiggle.co.uk/wp-content/uploads/2017/12/david-llyod-wiggle-giggle-classes.jpg',
            'brand_id' => 3
        ]);

        DB::table('items')->insert([
            'name' => 'The Fitness Lounge',
            'price' => 30,
            'description' => 'Een maatje minder. Of juist méér – maar dan in spiermassa. Wat je doel ook is, bij The Fitness Lounge gaat het je lukken!',
            'imagepath' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1eFOPLpKigy_ttNvVse-fLDl1XDkSP3coubUnN-ecqZoYKJJN&s',
            'brand_id' => 4
        ]);

        DB::table('items')->insert([
            'name' => 'MyLife',
            'price' => 22,
            'description' => 'Lid worden bij MyLife is perfect voor wie sporten als onderdeel van een uitgebalanceerd leven ziet. Voor wie met partner, familie of vrienden lekker op pad wil naar de sportschool. Voor wie daar vooral plezier in wil hebben. En voor wie een professionele omgeving dan vanzelfsprekend is.',
            'imagepath' => 'https://pbs.twimg.com/profile_images/510149986802094080/bjVmYUbg_400x400.png',
            'brand_id' => 5
        ]);
    }
}
