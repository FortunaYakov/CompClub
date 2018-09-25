<?php

use Illuminate\Database\Seeder;

class TypeComputerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $type1 = new \App\TypeComputer();
        $type1->type_computer = 'Game PC';
        $type1->save();

        $type2 = new \App\TypeComputer();
        $type2->type_computer = 'Work PC';
        $type2->save();

    }
}
