<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = [
            [
                'id'                => '998d0005-7dbe-4273-9fac-dd4547e03595',
                'name'              => 'Client User',
                'role_id'           => Role::CLIENT->value,
                'email'             => 'client@jmrAppointments.com',
                'email_verified_at' => Carbon::now(),
                'password'          => bcrypt('client7357'),
                'remember_token'    => Str::random(10),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'id'                => '998d021a-ffe9-4962-940f-c8b786efa30c',
                'name'              => 'Staff User',
                'role_id'           => Role::STAFF->value,
                'email'             => 'staff@jmrAppointments.com',
                'email_verified_at' => Carbon::now(),
                'password'          => bcrypt('staff8159'),
                'remember_token'    => Str::random(10),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'id'                => '998d02d8-ba4c-4f6d-80af-9cdf549b2ad2',
                'name'              => 'Admin User',
                'role_id'           => Role::ADMIN->value,
                'email'             => 'admin@jmrAppointments.com',
                'email_verified_at' => Carbon::now(),
                'password'          => bcrypt('admin9123'),
                'remember_token'    => Str::random(10),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'id'                => '998d03a1-0b7b-40e6-a76c-03613dd4f076',
                'name'              => 'Richard A. Hoyle',
                'role_id'           => Role::ADMIN->value,
                'email'             => 'rhoyle@jmrAppointments.com',
                'email_verified_at' => Carbon::now(),
                'password'          => bcrypt('64Rah56B'),
                'remember_token'    => Str::random(10),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],

        ];

        User::insert($users);

    }
}
