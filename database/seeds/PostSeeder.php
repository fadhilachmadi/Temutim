<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => 'Project Laravel Web Prog',
            'description' => 'Membuat project web prog untuk bulan januari',
            'media_file' => '/images/ovo_logo.png',
            'post_date' => Carbon::now(),    
        ]);
    }
}