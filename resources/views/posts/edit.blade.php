<x-main>
    
    <div class="container">
        <h1>Edit Post</h1>
        <form action="{{ route('updatepost', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}">
            </div>
            
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5">{{ old('content', $post->content) }}</textarea>
            </div>
            
            <div class="mb-3">
                <label for="published_at" class="form-label">Published At</label>
                <input type="datetime-local" class="form-control" id="published_at" name="published_at" value="{{ old('published_at', $post->published_at ? date('Y-m-d\TH:i', strtotime($post->published_at)) : '') }}">

            </div>
            
            <div class="mb-3">
                <label for="image_url" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="image_url" name="image_url" value="{{ old('image_url', $post->image_url) }}">
            </div>
            
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>
    
</x-main>
