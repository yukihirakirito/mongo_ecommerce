<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'dont11',
            'name' => 'Nguyễn Thành Đô',
            'email' => 'dont11@fpt.edu.vn',
            'password' => bcrypt('dont11')
        ]);
    }
}
