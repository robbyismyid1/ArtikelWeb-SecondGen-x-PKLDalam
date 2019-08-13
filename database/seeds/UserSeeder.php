<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role;
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        $admin = new User();
        $admin->name = 'Robby Saputra'; 
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('rahasiaku');
        $admin->save();
        $admin->attachRole($adminRole);
    }
}
