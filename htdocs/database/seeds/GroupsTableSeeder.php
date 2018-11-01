<?php

use App\Group;
use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            'Administrator',
            'Board Admin',
            'News Admin',
            'User',
        ];
        foreach($groups as $group) {
            Group::insert([
                'name' => $group,
                'slug' => str_slug($group),
            ]);
        }
    }
}
