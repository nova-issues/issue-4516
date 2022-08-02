<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password

        User::forceCreate([
            'name' => 'Taylor Otwell',
            'u_emailadres' => 'taylor@laravel.com',
            'u_sleutel' => $password,
        ]);

        User::forceCreate([
            'name' => 'Mohamed Said',
            'u_emailadres' => 'mohamed@laravel.com',
            'u_sleutel' => $password,
        ]);

        User::forceCreate([
            'name' => 'David Hemphill',
            'u_emailadres' => 'david@laravel.com',
            'u_sleutel' => $password,
        ]);

        User::forceCreate([
            'name' => 'Laravel Nova',
            'u_emailadres' => 'nova@laravel.com',
            'u_sleutel' => $password,
        ]);
    }
}
