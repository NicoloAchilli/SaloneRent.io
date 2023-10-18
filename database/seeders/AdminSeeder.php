<?php

namespace Database\Seeders;

use App\Models\Resources\Account;
use App\Models\Resources\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $account_info = [
            'name' => 'admin',
            'surname' => 'admin',
            'username' => 'admin',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',  // password
            'birth' => '2001-01-01',
            'email' => 'admin@admin.com',
            'image_path' => null,
            'last_access' => now()
        ];
        $account = Account::create($account_info);
        $admin = [
            'id' => $account->id
        ];
        Admin::create($admin);
    }
}
