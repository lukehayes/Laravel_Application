@extends('app')

<div class="post">
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->content }}</p>
    <a href="{{route('post.edit', $post->id)}}">Edit this post.</a>
</div>
