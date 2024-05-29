<x-main>
    
    <div class="container">
        <h1>All Posts</h1>
        <a href="{{ route('createpost') }}" class="btn btn-primary mb-3">Create New Post</a>
        @if($posts->count())
            <div class="list-group">
                @foreach($posts as $post)
                    <a href="{{ route('showpost', $post->id) }}" class="list-group-item list-group-item-action">
                        <h5 class="mb-1">{{ $post->title }}</h5>
                        <p class="mb-1">{{ Str::limit($post->content, 100) }}</p>
                        <small>Published at: {{ $post->published_at }}</small>
                    </a>
                @endforeach
            </div>
        @else
            <p>No posts found.</p>
        @endif
    </div>

</x-main>