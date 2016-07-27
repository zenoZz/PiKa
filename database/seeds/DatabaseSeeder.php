<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(ActionsTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(MenuPermissionTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(ActionPermissionTableSeeder::class);

        Model::reguard();
    }
}
