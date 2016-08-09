<?php

use Illuminate\Database\Seeder;

class professors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professors')->insert([
        'name' => 'Isabel',
      ]);
      DB::table('professors')->insert([
        'name' => 'Misael',
      ]);
      DB::table('category_types')->insert([
        'name' => 'Any Name',
      ]);
    }
}
