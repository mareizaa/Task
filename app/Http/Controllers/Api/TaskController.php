<?php

namespace App\Http\Controllers;

use App\Actions\Tasks\StoreOrUpdateTaskAction;
use App\Http\Requests\Tasks\TaskRequest;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class TaskController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $task = Task::paginate();
        return TaskResource::collection($task);
    }

    public function store(TaskRequest $request, StoreOrUpdateTaskAction $storeAction): TaskResource
    {
        $task = $storeAction->execute($request, new Task());

        return new TaskResource($task);
    }

    public function show(Task $task): TaskResource
    {
        return new TaskResource($task);
    }

    public function update(TaskRequest $request, Task $task, StoreOrUpdateTaskAction $updateAction): TaskResource
    {
        $task = $updateAction->execute($request, $task);

        return new TaskResource($task);
    }

    public function destroy(Task $task): JsonResponse
    {
        $task->delete();

        return response()->json([
            "message" => 'Task Removed'
        ]);
    }
}
