<?php

namespace Database\Seeders;

use App\Models\manager;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $manager = new manager();
        $manager->fname = 'Ahmad';
        $manager->lname = 'Almabhouh';
        $manager->email = 'az540546@gmail.com';
        $manager->password = Hash::make('Laravel0599!');
        $manager->save();
    }
    
}
