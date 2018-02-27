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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'department_id' => '2',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password'=> bcrypt('admin')

        ]);
        DB::table('h_department')->insert([
            'name' => 'sweswe',
            'description' => 'HR'
        ]);
        DB::table('h_shift')->insert([
           [
           	'start_time' => '2018-02-27 16:41:27',
            'end_time' => '2018-02-27 16:41:27',
            'shift_name' => 'MyaMya',
            'shift_description' =>'myamya'
           ],
           [
           	'start_time' => '2018-02-27 16:41:27',
            'end_time' => '2018-02-27 16:41:27',
            'shift_name' => 'HlaHla',
            'shift_description' =>'hlahla'
           ],
           [
           	'start_time' => '2018-02-27 16:41:27',
            'end_time' => '2018-02-27 16:41:27',
            'shift_name' => 'MgMg',
            'shift_description' =>'mgmg'
           ],
        ]);
    }
}
