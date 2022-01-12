<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserWithRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = 'Administrator';
        $admin->email = 'admin@app.test';
        $admin->email_verified_at = date('Y-m-d H:i:s');
        $admin->password = bcrypt('password');
        $admin->role = 'admin';
        $admin->save();

        $admin = new User;
        $admin->name = 'Manager';
        $admin->email = 'manager@app.test';
        $admin->email_verified_at = date('Y-m-d H:i:s');
        $admin->password = bcrypt('password');
        $admin->role = 'manager';
        $admin->save();

        $admin = new User;
        $admin->name = 'Approval';
        $admin->email = 'approval@app.test';
        $admin->email_verified_at = date('Y-m-d H:i:s');
        $admin->password = bcrypt('password');
        $admin->role = 'approval';
        $admin->save();
    }
}
