<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Support\Facades\Hash;

class CreateDumpUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Iho Somnam',
            'email' => 'ihosomnam4741@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        Wallet::create();
    }
}
