<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'name' => 'Super Admin',
                'email' => 'cosmin@fantastic-events.ro',
                'password' => Hash::make('superadmin123'),
                'role' => 'super_admin',
                'phone' => '1234567890',
                'status' => true,
                'last_login_at' => now(),
                'last_login_ip' => '192.168.1.1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

