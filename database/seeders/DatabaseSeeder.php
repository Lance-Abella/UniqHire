<?php

namespace Database\Seeders;

use App\Models\AllUser;
use App\Models\Disability;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\UserInfo;
use Illuminate\Support\Facades\Hash;

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
        //ROLES
        $admin = Role::create(['role_name' => 'Admin']);
        $pwd = Role::create(['role_name' => 'PWD']);
        $trainer = Role::create(['role_name' => 'Trainer']);
        $employer = Role::create(['role_name' => 'Employer']);
        $sponsor = Role::create(['role_name' => 'Sponsor']);
        
        //DISABILITIES
        $arm = Disability::create(['disability_name' => 'Arm Amputee']);
        $leg = Disability::create(['disability_name' => 'Leg Amputee']);
        $hear = Disability::create(['disability_name' => 'Hearing Impaired']);
        $speech = Disability::create(['disability_name' => 'Speech Impairment']);
        $visual = Disability::create(['disability_name' => 'Visually Impaired']);


        $adminuser = User::create([        
            'email' => 'kler@example.com',
            'password' => Hash::make('qwe1234'),
            
        ]);

        UserInfo::create([
            'firstname' => 'Evryl',
            'lastname' => 'Claire',
            'contactnumber' => '09123456789',
            'city' => 'cebu',
            'state' => 'bulacao',
            'disability_id' => $arm->id, // Assign a disability ID here
            'user_id' => $adminuser->id,
        ]);


        $adminuser->roles()->attach($admin);
        // $user->disabilities()->attach($arm);

        $pwduser = User::create([        
            'email' => 'pwd@example.com',
            'password' => Hash::make('qwe1234'),
            
        ]);

        UserInfo::create([
            'firstname' => 'Juan',
            'lastname' => 'Dela Cruz',
            'contactnumber' => '09123456789',
            'city' => 'cebu',
            'state' => 'bulacao',
            'disability_id' => $arm->id, // Assign a disability ID here
            'user_id' => $pwduser->id,
        ]);


        $pwduser->roles()->attach($pwd);
    }
}
