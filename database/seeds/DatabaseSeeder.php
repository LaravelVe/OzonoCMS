<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $seeders = [
            PermissionTableSeeder::class,
            RoleTableSeeder::class,
            UsersTableSeeder::class,
        ];
        foreach($seeders as $seeder) {
            $this->call($seeder);
        }
    }
}
