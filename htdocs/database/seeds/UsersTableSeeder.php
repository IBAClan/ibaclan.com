<?php

use App\User;
use App\Group;
use App\Role;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = User::insert([
            'name' => 'Fastmover',
            'username' => 'Fastmover',
            'email' => 'fastmoverr@gmail.com',
            'password' => bcrypt('secret'),
            'public' => true,
        ]);
        $user = User::find($id);
        $groups = Group::all()->pluck('id')->toArray();
        $roles = Role::all()->pluck('id')->toArray();
        $user->groups()->attach($groups);
        $user->roles()->attach($roles);
    }
}
