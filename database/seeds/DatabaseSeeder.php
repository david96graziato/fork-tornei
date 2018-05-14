<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SubscriberCategoriesSeeder::class);
        $this->call(SubscriberScoresSeeder::class);
        $this->call(SubscriberTypesSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
