<?php

namespace Database\Seeders;

use App\Models\Resources\Account;
use App\Models\Resources\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $account_info = [
            'name' => 'staff',
            'surname' => 'staff',
            'username' => 'staff',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',  // password
            'birth' => '2001-01-01',
            'email' => 'staff@staff.com',
            'image_path' => null,
            'last_access' => now()
        ];
        $account = Account::create($account_info);
        $staff = [
            'id' => $account->id
        ];
        Staff::create($staff);
    }
}
