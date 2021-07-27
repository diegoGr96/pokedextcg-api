<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        $users = array(
            ['name' => 'Diego Garcia', 'email' => 'diego@gmail.com', 'password' => Hash::make('123456')],
            ['name' => 'Jennifer Pich', 'email' => 'jenniferh@gmail.com', 'password' => Hash::make('123456')],
            ['name' => 'Jennifer Pich2', 'email' => 'jenniferhg@gmail.com', 'password' => Hash::make('123456')],
            ['name' => 'Jennifer Pich5', 'email' => 'jennifehr@gmail.com', 'password' => Hash::make('123456')],
            ['name' => 'Jennifer Pich7', 'email' => 'jennifer@gmail.com', 'password' => Hash::make('123456')],
            ['name' => 'Jennifer Pich20', 'email' => 'jennggfdifhger@gmail.com', 'password' => Hash::make('123456')],
            ['name' => 'Jennifer Pich10', 'email' => 'jenniferds@gmail.com', 'password' => Hash::make('123456')],
            ['name' => 'Jennifer Pich15', 'email' => 'jennigdfhder@gmail.com', 'password' => Hash::make('123456')],
            ['name' => 'Jennifer Pich11', 'email' => 'jennifgfder@gmail.com', 'password' => Hash::make('123456')],
            ['name' => 'Jennifer Pich124', 'email' => 'jengfdnifer@gmail.com', 'password' => Hash::make('123456')],
            ['name' => 'Jennifer Pich235', 'email' => 'jennigfer@gmail.com', 'password' => Hash::make('123456')],
        );

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
