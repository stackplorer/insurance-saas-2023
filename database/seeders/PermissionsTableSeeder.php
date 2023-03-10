<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 18,
                'title' => 'person_create',
            ],
            [
                'id'    => 19,
                'title' => 'person_edit',
            ],
            [
                'id'    => 20,
                'title' => 'person_show',
            ],
            [
                'id'    => 21,
                'title' => 'person_delete',
            ],
            [
                'id'    => 22,
                'title' => 'person_access',
            ],
            [
                'id'    => 23,
                'title' => 'team_create',
            ],
            [
                'id'    => 24,
                'title' => 'team_edit',
            ],
            [
                'id'    => 25,
                'title' => 'team_show',
            ],
            [
                'id'    => 26,
                'title' => 'team_delete',
            ],
            [
                'id'    => 27,
                'title' => 'team_access',
            ],
            [
                'id'    => 28,
                'title' => 'insurer_create',
            ],
            [
                'id'    => 29,
                'title' => 'insurer_edit',
            ],
            [
                'id'    => 30,
                'title' => 'insurer_show',
            ],
            [
                'id'    => 31,
                'title' => 'insurer_delete',
            ],
            [
                'id'    => 32,
                'title' => 'insurer_access',
            ],
            [
                'id'    => 33,
                'title' => 'policy_create',
            ],
            [
                'id'    => 34,
                'title' => 'policy_edit',
            ],
            [
                'id'    => 35,
                'title' => 'policy_show',
            ],
            [
                'id'    => 36,
                'title' => 'policy_delete',
            ],
            [
                'id'    => 37,
                'title' => 'policy_access',
            ],
        ];

        Permission::insert($permissions);
    }
}