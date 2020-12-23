<?php

use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
            'type_name' => 'OVO',
            'image' => '/images/ovo_logo.png'
        ]);

        DB::table('payments')->insert([
            'type_name' => 'gopay',
            'image' => '/images/gopay_logo.png'
        ]);

                DB::table('payments')->insert([
            'type_name' => 'DANA',
            'image' => '/images/dana_logo.png'
        ]);

                DB::table('payments')->insert([
            'type_name' => 'Bank Transfer',
            'image' => '/images/bank_logo.png'
        ]);
    }
}
