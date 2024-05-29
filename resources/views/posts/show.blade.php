
<x-main>
    
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        @if ($post->image_url)
            <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="img-fluid">
        @endif
        <p>Published at: {{ $post->published_at }}</p>
        <a href="{{ route('editpost', $post->id) }}" class="btn btn-secondary">Edit Post</a>
    </div>

</x-main>
