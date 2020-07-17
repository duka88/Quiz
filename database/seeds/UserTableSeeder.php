<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'duka',
            'email' => 'test@mail.com',	           
            'password' => Hash::make('123')
      	]);

      	 $user->profile()->update(['role' => 'admin']);
       
      }
  
}
