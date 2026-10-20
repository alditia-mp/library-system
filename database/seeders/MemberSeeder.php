<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    public function run(): void
    {
        Member::create([
            'name' => 'Adit',
            'email' => 'adit@example.com',
            'phone' => '08123456789',
        ]);

        Member::create([
            'name' => 'Sari',
            'email' => 'sari@example.com',
            'phone' => '08987654321',
        ]);

        Member::create([
            'name' => 'Eko',
            'email' => 'eko@example.com',
            'phone' => '08471718974',
        ]);

        Member::create([
            'name' => 'Siti',
            'email' => 'siti@example.com',
            'phone' => '08471394177',
        ]);

        Member::create([
            'name' => 'Pratomo',
            'email' => 'pratomo@example.com',
            'phone' => '08988237768',
        ]);
    }
}