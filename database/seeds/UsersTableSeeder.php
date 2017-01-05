<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'      => 'Owner',
                'email'     => 'owner@mail.com',
                'password'  => bcrypt('ownertest')
            ],
            [
                'name'      => 'Administrador',
                'email'     => 'admin@mail.com',
                'password'  => bcrypt('admintest')
            ],
        ];

        foreach ($users as $key => $value) {
        	User::create($value);
        }

        // add owner role
        $userOwner = User::where('name', '=', 'Owner')->first();
        $roleOwner = Role::where('name', '=', 'owner')->first();
        $userOwner->attachRole($roleOwner);

        // add admin role
        $userAdmin = User::where('name', '=', 'Administrador')->first();
        $roleAdmin = Role::where('name', '=', 'admin')->first();
        $userAdmin->attachRole($roleAdmin);

        // get permissions
        $roleListPermission = Permission::where('name', '=', 'role-list')->first();
        $roleCreatePermission = Permission::where('name', '=', 'role-create')->first();
        $roleEditPermission = Permission::where('name', '=', 'role-edit')->first();
        $roleDeletePermission = Permission::where('name', '=', 'role-delete')->first();

        // add permissions to roles
        // add role to owner
        $roleOwner->attachPermissions([
            $roleListPermission,
            $roleCreatePermission,
            $roleEditPermission,
            $roleDeletePermission,
        ]);

    }
}
