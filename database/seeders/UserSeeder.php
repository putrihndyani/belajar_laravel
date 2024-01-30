<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ini buat role nama ke table role
        $roleadmin = Role::create([
            'name' => 'admin'
        ]);
        $roleuser = Role::create([
            'name' => 'user'
        ]);
        //ini buat insert data user dengan role yang sudah dibuat menggunakan syncRoles
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        $admin->syncRoles($roleadmin);

        $user = User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123')
        ]);
        $user->syncRoles($roleuser);
    }
}
