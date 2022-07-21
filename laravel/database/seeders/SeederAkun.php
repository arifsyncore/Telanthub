<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class SeederAkun extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'talenta',
                'name'=>'Admin Talenta',
                'email'=>'talenta@example.com',
                'level'=>'admin',
                'password'=> bcrypt('talenta123'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
