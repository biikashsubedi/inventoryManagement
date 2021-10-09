<?php

namespace Database\Seeders;


use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('id', 1)->first();
        if (!isset($user)) {
            User::create([
                'name' => 'Admin',
                'email' => env('DEFAULT_EMAIL', 'test.bikashsubedi@gmail.com'),
                'username' => 'admin',
                'password' => Hash::make('password'),
                'password_resetted' => 1,
//                'role_id' => 1,
                'email_verified_at' => Carbon::now(),
            ]);
        }
    }
}
