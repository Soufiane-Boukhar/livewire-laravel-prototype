<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\tasks\TaskManager;
use App\Livewire\tasks\CreateTask;
use App\Livewire\posts\PostManager;
use App\Livewire\posts\PostCreate;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks/create', CreateTask::class);
Route::get('/tasks', action: TaskManager::class);

Route::get('/posts/create', PostCreate::class)->name('posts.create');

Route::get('/posts', action: PostManager::class)->name('posts.index');
