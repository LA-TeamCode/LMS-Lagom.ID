<?php

namespace Database\Seeders;

use App\Models\AdminModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class add_admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdminModel::create([
            'name' => 'Master Admin',
            'nip' => '12345678',
            'email' => 'master@gmail.com',
            'password' => Hash::make('12345'),
            'role' => 1,
        ]);
    }
}
