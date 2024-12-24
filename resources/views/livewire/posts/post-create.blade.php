<div>
    <h1>Add New Post</h1>
    <form wire:submit.prevent="createPost" class="create-post-form">
        <!-- Title Input -->
        <input 
            type="text" 
            wire:model="title" 
            placeholder="Enter post title"
            class="@error('title') is-invalid @enderror"
        >
        @error('title') 
            <span class="error">{{ $message }}</span>
        @enderror

        <!-- Description Input -->
        <input 
            type="text" 
            wire:model="description" 
            placeholder="Enter post description"
            class="@error('description') is-invalid @enderror"
        >
        @error('description') 
            <span class="error">{{ $message }}</span>
        @enderror

        <!-- Button Group -->
        <div class="button-group">
            <button type="submit">Add Post</button>
            <a href="{{ route('posts.index') }}" class="back-button">Back to List</a>
        </div>
    </form>
</div>
