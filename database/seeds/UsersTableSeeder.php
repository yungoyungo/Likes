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
        DB::table('users')->delete();
 
        App\User::create([
            'name' => 'root',
            'email' => 'root@example.com',
            'password' => Hash::make('password'),
        ]);
        App\User::create([
            'name' => 'yusa',
            'email' => 'yusa@example.com',
            'password' => Hash::make('password'),
        ]);
        App\User::create([
            'name' => 'sample',
            'email' => 'sample@example.com',
            'password' => Hash::make('password'),
        ]);

        factory(User::class, 7)->create();
    }
}
