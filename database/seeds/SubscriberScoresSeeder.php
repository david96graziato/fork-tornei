<?php

use Illuminate\Database\Seeder;

class SubscriberScoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $data = array(
            array('name' => '4.NC'),
            array('name' => '4.6'),
            array('name' => '4.5'),
            array('name' => '4.4'),
            array('name' => '4.3'),
            array('name' => '4.2'),
            array('name' => '4.1'),
            array('name' => '3.5'),
            array('name' => '3.4'),
            array('name' => '3.3'),
            array('name' => '3.2'),
            array('name' => '3.1'),
            array('name' => '2.8'),
            array('name' => '2.7'),
            array('name' => '2.6'),
            array('name' => '2.5'),
            array('name' => '2.4'),
            array('name' => '2.3'),
            array('name' => '2.2'),
            array('name' => '2.1'),
            array('name' => '1.x')
        );

        DB::table('subscriber_scores')->insert($data);
    }
}
