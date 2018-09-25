<?php

use Illuminate\Database\Seeder;

class ComputerTableSeeder extends Seeder
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
            DB::table('computers')->insert([
                'id_staff' => rand(1, 3),
                'status' => rand(0, 1),
                'id_type' => rand(1, 2),
                'created_at' => $faker->dateTime(),
            ]);
        }
    }
}
