@extends('app')

@section('main')

@if (session('status'))
<div class="container">
    <div class="notification">
        {{ session('status') }}
    </div>
</div>
@endif

<div class="section">
    <div class="container">
        @foreach($posts as $post)
        <div class="columns">
            <div class="column content">
                <h4 class="title"><a href="{{route('post.show', $post->id)}}">{{$post->title}}</a></h4>
                <p>{{ $post->content }}</p>


                @if($post->category)
                <div class="tags">
                    <span class="tag is-link">{{$post->category->category}}</span>
                </div>
                @endif




                <a href="{{route('post.edit', $post->id)}}" class="button is-small is-outlined">Edit this post</a>
                <a href="{{route('post.destroy', $post->id)}}" class="button is-small is-outlined">Delete</a>
            </div> <!-- .column -->
        </div> <!-- .columns -->
        @endforeach
    </div> <!-- .container -->
</div> <!-- .section -->



@endsection('main')
