<ul>
    @foreach ($posts as $post)
        <li>{{ $post->title }} - <strong>{{ $post->created_date }}</strong> ({{ $post->likes_count }} likes)</li>
    @endforeach
</ul>
