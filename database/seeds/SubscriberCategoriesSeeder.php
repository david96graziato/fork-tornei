<?php

use Illuminate\Database\Seeder;

class SubscriberCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $data = array(
            array('name' => 'Under 10 Maschile', 'short' => 'U10M'),
            array('name' => 'Under 12 Maschile', 'short' => 'U12M'),
            array('name' => 'Under 14 Maschile', 'short' => 'U14M'),
            array('name' => 'Under 16 Maschile', 'short' => 'U16M'),
            array('name' => 'Under 10 Femminile', 'short' => 'U10F'),
            array('name' => 'Under 12 Femminile', 'short' => 'U12F'),
            array('name' => 'Under 14 Femminile', 'short' => 'U14F'),
            array('name' => 'Under 16 Femminile', 'short' => 'U16F'),
            array('name' => 'Adulti Maschile', 'short' => 'AM'),
            array('name' => 'Adulti Femminile', 'short' => 'AF')
        );

        DB::table('subscriber_categories')->insert($data);
    }
}
