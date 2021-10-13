<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'update-posts',
            'delete-posts',
            'update-users',
            'delete-users',
            'update-comments',
            'delete-comments',
            'categories',
            'cache',
            'roles',
            'permissions',
        ];

        foreach ($data as $name) {
            Permission::factory()
                ->create(['name' => $name]);
        }
    }
}
