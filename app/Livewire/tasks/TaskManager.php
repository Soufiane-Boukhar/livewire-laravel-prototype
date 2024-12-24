<?php

namespace App\Livewire\tasks;

use Livewire\Component;
use App\Models\Task;

class TaskManager extends Component
{
   
    public $editingTaskId;
    public $editingTaskTitle;
    public $search = '';
    public $filter = 'all';

    public function render()
    {
        $tasks = Task::query()
            ->when($this->search, function ($query, $search) {
                return $query->where('title', 'like', '%' . $search . '%');
            })
            ->when($this->filter !== 'all', function ($query) {
                return $query->where('is_completed', $this->filter === 'completed');
            })
            ->get();

        return view('livewire.tasks.task-manager', ['tasks' => $tasks]);
    }


    public function toggleComplete($taskId)
    {
        $task = Task::findOrFail($taskId);
        $task->is_completed = !$task->is_completed;
        $task->save();
    }

    public function editTask($taskId)
    {
        $this->editingTaskId = $taskId;
        $this->editingTaskTitle = Task::findOrFail($taskId)->title;
    }

    public function updateTask()
    {
        $this->validate([
            'editingTaskTitle' => 'required|min:3',
        ]);

        $task = Task::findOrFail($this->editingTaskId);
        $task->title = $this->editingTaskTitle;
        $task->save();

        $this->editingTaskId = null;
    }

    public function deleteTask($taskId)
    {
        Task::destroy($taskId);
    }
}
