<?php

use Illuminate\Database\Seeder;

class SubscriberTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $data = array(
            array('name' => 'Singolo', 'short' => 'S'),
            array('name' => 'Doppio', 'short' => 'D')
        );

        DB::table('subscriber_types')->insert($data);
    }
}
