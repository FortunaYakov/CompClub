<?php

use Illuminate\Database\Seeder;
use App\Tariff;

class TariffTableSeeder extends Seeder
{
    public function run()
    {
        $faker1 = Faker\Factory::create();
        $faker = new Faker\Generator();
        $faker->addProvider(new Faker\Provider\en_GB\Person($faker));

        $tariff1 = new Tariff();
        $tariff1->name = 'Day';
        $tariff1->price = 20;
        $tariff1->start_period = 0;
        $tariff1->end_period = 12;
        $tariff1->created_at = $faker1->dateTime();
        $tariff1->save();

        $tariff2 = new Tariff();
        $tariff2->name = 'Night';
        $tariff2->price = 10;
        $tariff2->start_period = 0;
        $tariff2->end_period = 12;
        $tariff2->created_at = $faker1->dateTime();
        $tariff2->save();
    }
}
