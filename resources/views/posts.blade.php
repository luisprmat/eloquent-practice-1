@foreach ($dates as $date => $posts)
    <b>{{ $date }}</b>
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }} ({{ $post->likes_count }} likes)</li>
        @endforeach
    </ul>
@endforeach
