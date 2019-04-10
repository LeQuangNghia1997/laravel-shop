<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->id =1 ;
        $user->name= "admin";
        $user->email = "admin@gmail.com";
        $user->password= bcrypt("123456");
        $user->address = "Ha Noi";
        $user->phone="123456456";
        $user->image="";
        $user->role= \App\Http\Controllers\RoleConstant::ADMIN;
        $user->save();
    }
}
