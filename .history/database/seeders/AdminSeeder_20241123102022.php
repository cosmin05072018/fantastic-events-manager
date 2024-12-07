<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => 'superadmin123', // Parola va fi hash-uită automat de model
            'role' => 'super_admin',
            'phone' => '1234567890',
            'status' => true,
            'last_login_at' => now(),
            'last_login_ip' => '192.168.1.1',
        ]);
    }
}
