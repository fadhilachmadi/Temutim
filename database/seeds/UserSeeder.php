<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'position' => 'Admin',
            'email' => 'admin@mail.com',
            'DOB' => '2000-01-01',
            'gender' => 'male',
            'phone_number' => '0811231312',
            'profile_picture' => 'default_profile_picture.png',
            'CV' => '',
            'portfolio' => '',
            'status' => 'premium',
            'email_verified_at' => '2020-01-15',
            'password' =>Hash::make('admin')
        ]);
    }
}
