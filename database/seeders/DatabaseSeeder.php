<?php

namespace Database\Seeders;

use App\Models\AllUser;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $admin = Role::create(['role_name' => 'Admin']);
        $pwd = Role::create(['role_name' => 'PWD']);
        $trainer = Role::create(['role_name' => 'Trainer']);
        $employer = Role::create(['role_name' => 'Employer']);
        $sponsor = Role::create(['role_name' => 'Sponsor']);
        // $roles = [
        //     ['role_name' => 'PWD'],
        //     ['role_name' => 'Training Agency'],
        //     ['role_name' => 'Employer'],
        //     ['role_name' => 'Sponsor'],
        //     ['role_name' => 'Admin'],
        // ];

        // foreach ($roles as $role) {
        //     Role::create($role);
        // }


        $user = User::create([
            'firstname' => 'Evryl',
            'lastname' => 'Claire',
            'email' => 'kler@example.com',
            'contactnumber' => '09123456789',
            'password' => bcrypt('qwe1234'),
            'city' => 'cebu',
            'state' => 'bulacao',
        ]);


        $user->roles()->attach($admin);

    }
}
