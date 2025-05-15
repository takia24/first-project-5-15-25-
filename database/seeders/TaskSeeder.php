<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Learn Laravel',
            'description' => 'Description for Task 1',
            'completed' => false,
        ]);

        Task::create([
            'title' => 'Build a Task Manager',
            'description' => 'Description for Task 2',
            'completed' => false,
        ]);

        Task::create([
            'title' => 'Review Project',
            'description' => 'Check everything is working and clean the code.',
            'completed' => true,
        ]);
    }
}
