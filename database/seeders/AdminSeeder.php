<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $admin = new Admin();
        $admin->fname = 'Ahmad';
        $admin->lname = 'Almabhouh';
        $admin->email = 'az540546@gmail.com';
        $admin->password = Hash::make('Laravel0599!');
        $admin->identity_no = '123456789';
        $admin->BOD = '2023-04-13';
        $admin->save();
    }    }

