<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@mailinator.com',
            'password' => bcrypt('password'),
        ]);

        // Assign the "admin" role to the admin user
        $adminRole = Role::where('name', 'admin')->first();
        $admin->assignRole($adminRole);
    }
}
