<?php

namespace App\Livewire\posts;

use Livewire\Component;
use App\Models\Post;

class PostCreate extends Component
{
    public $title;
    public $description;

    public function render()
    {
        return view('livewire.posts.post-create');
    }

    public function createPost()
    {
        $validatedData = $this->validate([
            'title' => 'required|max:255',
            'description' => 'required|min:10',
        ]);

        Post::create($validatedData);

        $this->reset(['title', 'description']);

        session()->flash('message', 'Post created successfully!');

        return redirect()->route('posts.index');
    }
}
