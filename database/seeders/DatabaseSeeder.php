<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         $user = \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
             'password' => bcrypt('123456'),
         ]);
         $project = Project::factory()->create();

         $project->users()->syncWithPivotValues($user, ['is_main_user' => true]);
    }
}
