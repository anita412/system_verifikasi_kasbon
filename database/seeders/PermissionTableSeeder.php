<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'unit-list',
            'unit-create',
            'unit-edit',
            'unit-delete',
            'kasbon-list',
            'kasbon-create',
            'kasbon-edit',
            'kasbon-delete',
            'vkb-list',
            'vkb-create',
            'vkb-edit',
            'vkb-delete',
            'vkb-atasan-list',
            'vkb-atasan-create',
            'vkb-atasan-edit',
            'vkb-atasan-delete',
            'vkb-atasan-2-list',
            'vkb-atasan-2-create',
            'vkb-atasan-2-edit',
            'vkb-atasan-2-delete',
            'pertanggungan-list',
            'pertanggungan-create',
            'pertanggungan-edit',
            'pertanggungan-delete',
            'vkp-list',
            'vkp-create',
            'vkp-edit',
            'vkp-delete',
            'vkp-atasan-list',
            'vkp-atasan-create',
            'vkp-atasan-edit',
            'vkp-atasan-delete',
            'vkp-atasan-2-list',
            'vkp-atasan-2-create',
            'vkp-atasan-2-edit',
            'vkp-atasan-2-delete',
            'sppd-list',
            'sppd-create',
            'sppd-edit',
            'sppd-delete',
            'nonkasbon-list',
            'nonkasbon-create',
            'nonkasbon-edit',
            'nonkasbon-delete',
            'nkb-list',
            'nkb-create',
            'nkb-edit',
            'nkb-delete',
            'nkb-atasan-list',
            'nkb-atasan-create',
            'nkb-atasan-edit',
            'nkb-atasan-delete',
            'nkb-atasan-2-list',
            'nkb-atasan-2-create',
            'nkb-atasan-2-edit',
            'nkb-atasan-2-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
