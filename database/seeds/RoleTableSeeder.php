<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
        	[
        		'name' => 'owner',
        		'display_name' => 'Project Owner',
        		'description' => 'User is the owner of a given project'
        	],
        	[
        		'name' => 'admin',
        		'display_name' => 'User Administrator',
        		'description' => 'User is allowed to manage and edit other users'
        	],
        ];

        foreach ($roles as $key => $value) {
        	Role::create($value);
        }
    }
}
