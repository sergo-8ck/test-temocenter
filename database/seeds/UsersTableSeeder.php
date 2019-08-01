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
        User::query()->truncate();

        User::create([
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'name' => 'Administrator'
        ]);
    }
}
