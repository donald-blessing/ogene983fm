<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::updateOrCreate(
            ['username' => 'admin'],
            [
                'name' => 'Admin',
                'email' => 'info@ogene983fm.com',
                'password' => Hash::make('ImUtU*dd#03Y93'),
                'email_verified_at' => now(),
            ]
        );

        $role_r = Role::where('name', '=', 'admin')->firstOrFail();
        $user->assignRole($role_r); // Assigning role to user
    }
}
