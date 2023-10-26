<?php

namespace Database\Seeders;

use App\Models\Resources\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            StaffSeeder::class,
            AdminSeeder::class,
            CarSeeder::class,
            FaqSeeder::class,
        ]);
    }
}
