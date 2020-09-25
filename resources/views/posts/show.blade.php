@extends('layouts.app')

@section('main')

<div class="container">
    <div class="section">
        <div class="columns is-centered">
            <div class="column is-8">
                <div class="post content">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>
                    <a href="{{route('post.edit', $post->id)}}" class="button is-small">Edit this post.</a>
                    <a href="{{route('post.destroy', $post->id)}}" class="button is-small">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('main')
