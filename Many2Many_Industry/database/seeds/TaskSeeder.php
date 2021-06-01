<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Task::class, 50) -> create()
            -> each(function($task) {
            $employees = Employee::inRandomOrder() 
                        -> limit(rand(1,3))
                        -> get();
            $task -> employees() -> attach($employees);
            $task -> save();
        });
    }
}
