<?php

namespace App\Livewire\posts;

use Livewire\Component;
use App\Models\Post;

class PostManager extends Component
{
    public $newPostTitle = '';
    public $newPostDescription = '';
   public $editingPostId;

   public $editingPostTitle;
   public $editingPostDescription;

   public $search = '';

    public function render()
    {
        $posts = Post::query()->when($this->search, function ($query, $search){
            return $query->where('title', 'like', '%'.$search.'%')
                ->orWhere('description', 'like', '%'.$search.'%');

        })->paginate(2);
        return view('livewire.posts.post-manager',['posts' => $posts]);
    }


  


    public function create(){

        Post::create(['title' => $this->newPostTitle,'description'=> $this->newPostDescription]);
        
        $this->newPostTitle = '';
        $this->newPostDescription = '';

    }

    public function editPost($postId){
        $this->editingPostId = $postId;
        $this->editingPostTitle = Post::find($postId)->title;
        $this->editingPostDescription = Post::find($postId)->description;

    }

    public function updatePost()
    {
        $post = Post::find($this->editingPostId);

        $post->update([
            'title' => $this->editingPostTitle,
            'description' => $this->editingPostDescription,
        ]);

        $this->reset(['editingPostId', 'editingPostTitle', 'editingPostDescription']);
    }

    public function deletePost($postId){
        Post::find($postId)->delete();
    }
}
