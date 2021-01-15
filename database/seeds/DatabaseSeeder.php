<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(RequiredRoleSeeder::class);
        $this->call(CommentSeeder::class);
    }
}
