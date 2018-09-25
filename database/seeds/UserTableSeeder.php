<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('role','admin')->first();
        $role_manager  = Role::where('role', 'manager')->first();
        $role_client = Role::where('role', 'client')->first();

        $admin = new User();
        $admin->name = 'Admin Name';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('secret');
        $admin->id_role = 1;
        $admin->save();
        $admin->roles()->associate($role_admin);

        $manager = new User();
        $manager->name = 'Manager Name';
        $manager->email = 'manager@example.com';
        $manager->password = bcrypt('secret');
        $manager->id_role = 2;
        $manager->save();
        $manager->roles()->associate($role_manager);

        $client = new User();
        $client->name = 'Client1 Name';
        $client->email = 'client1@example.com';
        $client->password = bcrypt('1');
        $client->id_role = 3;
        $client->save();
        $client->roles()->associate($role_client);

        $faker = Faker\Factory::create();
        $limit = 30;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('1'),
                'id_role' => 3,
                'created_at' => $faker->dateTime(),
            ]);
        }

    }
}
