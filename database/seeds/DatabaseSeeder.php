<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Role comes before User seeder here.
        $this->call(RoleTableSeeder::class);
        // User seeder will use the roles above created.
        $this->call(UserTableSeeder::class);
        $this->call(ComputerTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(TypeComputerTableSeeder::class);
        $this->call(TariffTableSeeder::class);
        $this->call(LeaseTableSeeder::class);
    }
}
