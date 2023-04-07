<?php

namespace Database\Seeders;

use App\Models\Boss;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BossSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $boss = new Boss();
        $boss->fname = 'Ahmad';
        $boss->lname = 'Almabhouh';
        $boss->email = 'az540546@gmail.com';
        $boss->password = Hash::make('Laravel0599!');
        $boss->save();
    }
}
