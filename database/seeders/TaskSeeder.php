<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++) {
            DB::table('tasks')->insert([
                'title' => Str::random(50),
                'description' => Str::random(250),
                'user_id' => User::inRandomOrder()->first()->id,
                'task_id' => Task::inRandomOrder()->first()->id ?? NULL,
                'team_id' => NULL,
                'project_id' => 1,
                'priority' => NULL,
                //'status' => NULL,
                'creator' => 1,
                'due_date' => NULL,
                'completed_date' => NULL,
            ]);
        }
    }
}
