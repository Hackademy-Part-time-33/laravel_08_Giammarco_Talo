<x-main>
    
    <div class="container">
        <h1>All Posts</h1>
        <a href="{{ route('createpost') }}" class="btn btn-primary mb-3">Create Post</a>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->content }}</p>
                            <a href="{{ route('showpost', $post->id) }}" class="btn btn-primary">View Post</a>
                            <a href="{{ route('editposts', $post->id) }}" class="btn btn-secondary">Edit Post</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-main>