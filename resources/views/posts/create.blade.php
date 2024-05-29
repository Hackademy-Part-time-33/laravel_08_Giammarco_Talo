<x-main>
    

    <div class="container">
        <h1>Create Post</h1>
        <form action="{{ route('storepost') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" id="content" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="published_at" class="form-label">Published At</label>
                <input type="datetime-local" name="published_at" class="form-control" id="published_at">
            </div>
            <div class="mb-3">
                <label for="image_url" class="form-label">Image URL</label>
                <input type="file" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</x-main>