<?php

namespace App\Livewire\tasks;

use Livewire\Component;
use App\Models\Task;

class CreateTask extends Component
{
    public $newTaskTitle = '';

    public function addTask()
    {
        $this->validate([
            'newTaskTitle' => 'required|min:3',
        ]);

        Task::create(['title' => $this->newTaskTitle]);
        
        $this->newTaskTitle = '';
        $this->redirect('/tasks');
    }

    public function render()
    {
        return view('livewire.tasks.create-task');
    }
}