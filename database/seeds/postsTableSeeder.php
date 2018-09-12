<?php

use Illuminate\Database\Seeder;

class postsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('post')->insert([
            'title' => str_random(10),
            'body' => str_random(100),
        ]);

        DB::table('post')->insert([
            'title' => str_random(10),
            'body' => str_random(100),
        ]);

    }
}
