<?php

use Illuminate\Database\Seeder;

class LeaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 30;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('leases')->insert([
                'id_tariff' => rand(1, 2),
                'id_user' => rand(3, 33),
                'id_computer' => rand(1, 30),
                'hours' => rand(1,10),
                'created_at' => $faker->dateTime(),
            ]);
        }
    }
}
