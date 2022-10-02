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
            'kasbon-list',
            'kasbon-create',
            'kasbon-edit',
            'kasbon-delete',
            'kasbon-verifikasi',
            'verifikator-list',
            'verifikator-create',
            'verifikator-edit',
            'verifikator-delete',
            'verifikator-atasan-list',
            'verifikator-atasan-create',
            'verifikator-atasan-edit',
            'verifikator-atasan-delete',
            'pertanggungan-list',
            'pertanggungan-create',
            'pertanggungan-edit',
            'pertanggungan-delete',
            'sppd-list',
            'sppd-create',
            'sppd-edit',
            'sppd-delete',
            'nonkasbon-list',
            'nonkasbon-create',
            'nonkasbon-edit',
            'nonkasbon-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
