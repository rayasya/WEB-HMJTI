<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\ArtikelSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Truncate Table
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('tb_users')->truncate();
        DB::table('tb_artikel')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->call([UserSeeder::class]);
    }
}
