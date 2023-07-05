@foreach ($posts as $post)
    <div>
        <div>{{ $post->user->name }} said:</div>
        {{ $post->id }}: {{ $post->body }}
    </div>
@endforeach
