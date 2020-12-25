<?php

use Illuminate\Database\Seeder;

class RequiredRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('required_roles')->insert([
            'post_id' => 1,
            'name' => 'UI Designer',
            'quantity' => 5,  
        ]);
    }
}
