<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $users = [
            ['email' => 'obumneme.geohomes@gmail.com', 'view'=>'1', 'create' => '1',  'update' => '1',  'delete' => '1',  'password' => Hash::make('1234'), 'role' => 'admin'],
             ['email' => 'admin@gmail.com', 'view'=>'1', 'create' => '1',  'update' => '1',  'delete' => '1',  'password' => Hash::make('1234'), 'role' => 'admin'],
              ['email' => 'adminmanager@gmail.com', 'view'=>'1','create' => '1',  'update' => '1',  'delete' => '1',  'password' => Hash::make('1234'), 'role' => 'admin'],
            ['email' => 'manager@manager.io', 'password' => Hash::make('1234'), 'role' => 'manager'],
            ['email' => 'user@user.io', 'password' => Hash::make('1234'), 'role' => 'user'],
        ];

        User::truncate();
        foreach ($users as $user) {
            User::create($user);
        }
    }
}