<!-- resources/views/livewire/create-task.blade.php -->
<div>
    <h1>Add New Task</h1>
    
    <form wire:submit.prevent="addTask" class="create-task-form">
        <input type="text" wire:model="newTaskTitle" placeholder="Enter task title">
        <div class="button-group">
            <button type="submit">Add Task</button>
            <a href="/tasks" class="back-button">Back to List</a>
        </div>
    </form>
</div>

