@extends('app')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="post">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->content }}</p>
                <a href="{{route('post.edit', $post->id)}}" class="btn-sm btn-secondary">Edit this post.</a>
                <a href="{{route('post.destroy', $post->id)}}" class="btn-sm btn-danger ">Delete</a>
            </div>
        </div>
    </div>
</div>

