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
    }
}