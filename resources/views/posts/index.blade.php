@extends('app')

@section('main')
<p>All Posts:</p>

@foreach($posts as $post)
    <div>
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->content }}</p>
    </div>
@endforeach


@endsection('main')
