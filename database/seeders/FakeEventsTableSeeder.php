<?php

namespace Database\Seeders;

use App\Models\Rule;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FakeEventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $rules = Rule::all();

        foreach ($users as $user) {
            DB::table('events')->insert([
                'user_id' => $user->id,
                'rule_id' => $rules->random()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
