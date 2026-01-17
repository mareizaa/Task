<?php

namespace App\Actions\Tasks;

use App\Models\Task;
use Illuminate\Http\Request;

class StoreOrUpdateTaskAction
{
    public function execute(Request $request, Task $task): Task
    {
        $data = $request->validated();
        
        $task->title = $data['title'];
        $task->description = $data['description'];
        $task->status = $data['status'];

        $task->save();

        return $task;
    }
}
