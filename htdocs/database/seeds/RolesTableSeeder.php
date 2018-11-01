<?php
use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Administrator',
            'Board Admin',
            'News Admin',
            'User',
        ];
        foreach($roles as $role) {
            Role::insert([
                'name' => $role,
                'slug' => str_slug($role),
            ]);
        }

    }
}
