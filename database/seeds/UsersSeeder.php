<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array('name'=>'Davide', 'email'=>'diblasio.davide@gmail.com', 'password'=>bcrypt('ciaone'))
        );

        DB::table('users')->insert($data);
    }
}
