<?php

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker1 = Faker\Factory::create();
        $faker = new Faker\Generator();
        $faker->addProvider(new Faker\Provider\en_GB\Person($faker));
        $limit = 3;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('staffs')->insert([
                'name' => $faker->name,
                'created_at' => $faker1->dateTime(),
            ]);
        }
    }
}
