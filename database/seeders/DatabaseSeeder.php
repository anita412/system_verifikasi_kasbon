<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UnitSeeder::class,
            JenisSeeder::class,
            KursSeeder::class,
            PphSeeder::class,
            PermissionTableSeeder::class,
            CreateAdminUserSeeder::class,
            KasbonSeeder::class,
        ]);
    }
}
