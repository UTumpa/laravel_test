<?php

use Illuminate\Database\Seeder;

class CandidatesTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('candidates')->delete();

        $candidates = array(
            ['id' => 1, 'name' => 'Tumpa', 'symbol'=>'Orange', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Dolon', 'symbol'=>'Mango', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Mili', 'symbol'=>'Banana', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('candidates')->insert($candidates);
    }

}