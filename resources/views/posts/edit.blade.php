@extends('app')


<div class="container">
    <div class="columns">
        <div class="column">
            <h3 class="title is-4">Edit:</h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="column">

<form action="{{route('post.update', $post->id)}}" method="post">
    @csrf

    <div class="field">
        <label class="label" for="post-title">Post Title</label>
        <input type="text" name="title" class="input" value="{{$post->title}}" placeholder="New Post Title">
    </div>
    
    <div class="field">
        <label class="label" for="post-content">Post Content</label>
        <textarea class="textarea" name="content">{{$post->content}}</textarea>
    </div>

    <input type="submit" value="Create New Post" class="button ">
    
</form>

    </div>
</div>
