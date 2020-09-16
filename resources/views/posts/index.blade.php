@extends('app')

@section('main')


<div class="container">
    <div class="columns">
        <div class="column">
            <p>All Posts:</p>
        </div> <!-- .column -->
    </div> <!-- .columns -->
</div> <!-- .container -->


@if (session('status'))
    <div class="container">
        <div class="notification">
            {{ session('status') }}
        </div>
    </div>
@endif

<div class="container">
@foreach($posts as $post)
    <div class="columns">
        <div class="column">
            <h2 class="title"><a href="{{route('post.show', $post->id)}}">{{$post->title}}<a></h2>
            <p>{{ $post->content }}</p>
            <a href="{{route('post.edit', $post->id)}}" class="button is-small is-success">Edit this post.</a>
            <a href="{{route('post.destroy', $post->id)}}" class="button is-small is-danger">Delete</a>
        </div> <!-- .column -->
    </div> <!-- .columns -->
@endforeach
</div> <!-- .container -->



@endsection('main')
