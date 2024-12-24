<div>
    <h1>My Todo List</h1>

    <a href="/tasks/create" class="create-button">Add New Task</a>


    <div class="task-container">
        <input type="text" class="task-search" wire:model.live.debounce.50ms="search" placeholder="Search tasks...">
        <select class="task-filter" wire:model.live="filter">
            <option value="all">All Tasks</option>
            <option value="completed">Completed</option>
            <option value="pending">Pending</option>
        </select>
    </div>



    <table>
        <thead>
            <tr>
                <th>Task</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    @if($editingTaskId === $task->id)
                        <td>
                            <input type="text" wire:model="editingTaskTitle">
                        </td>
                        <td>
                            {{ $task->is_completed ? 'Completed' : 'Pending' }}
                        </td>
                        <td>
                            <button wire:click="updateTask">Save</button>
                        </td>
                    @else
                        <td>
                            <span style="{{ $task->is_completed ? 'text-decoration: line-through;' : '' }}">
                                {{ $task->title }}
                            </span>
                        </td>
                        <td>
                            {{ $task->is_completed ? 'Completed' : 'Pending' }}
                        </td>
                        <td>
                            <button wire:click="toggleComplete({{ $task->id }})">
                                {{ $task->is_completed ? 'Undo' : 'Complete' }}
                            </button>
                            <button wire:click="editTask({{ $task->id }})">Edit</button>
                            <button wire:click="deleteTask({{ $task->id }})">Delete</button>
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</div>