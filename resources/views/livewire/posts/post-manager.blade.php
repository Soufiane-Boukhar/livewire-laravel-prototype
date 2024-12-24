<div>
    <!-- Header Section -->
    <div>
        <h1>Posts</h1>
        <a href="{{ route('posts.create') }}">Add New Post</a>
    </div>

    <!-- Search Bar -->
    <input 
        type="text" 
        class="task-search" 
        wire:model.live.debounce.50ms="search" 
        placeholder="Search posts..."
    >

    <!-- Posts Table -->
    <table class="posts-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                @if ($editingPostId === $post->id)
                    <tr>
                        <!-- Editing Mode -->
                        <td>
                            <input 
                                type="text" 
                                wire:model="editingPostTitle" 
                                placeholder="Edit post title"
                            >
                        </td>
                        <td>
                            <input 
                                type="text" 
                                wire:model="editingPostDescription" 
                                placeholder="Edit post description"
                            >
                        </td>
                        <td>
                            <button wire:click.prevent="updatePost">Save</button>
                        </td>
                    </tr>
                @else
                    <tr>
                        <!-- Viewing Mode -->
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>
                            <button wire:click="editPost({{ $post->id }})">Edit</button>
                            <button wire:click="deletePost({{ $post->id }})">Delete</button>
                        </td>
                    </tr>
                @endif
            @empty
                <tr>
                    <td colspan="3" class="text-center">No data available</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <!-- Pagination -->
     {{ $posts->links() }}
</div>
