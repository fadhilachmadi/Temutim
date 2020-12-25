<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comments')->insert([
            'user_id' => 1,
            'post_id' => 1,
            'text' => 'Apakah ini gratis?',
            'comment_time' => Carbon::now()->addMonths(3),
        ]);
    }
}
