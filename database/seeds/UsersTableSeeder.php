<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->nrk = "000";
        $user->name = "Admin";
        $user->email = "admin@widyatama.ac.id";
        $user->password = bcrypt("password");
        $user->handphone = "0009983933423";
        $user->save();
    }
}
