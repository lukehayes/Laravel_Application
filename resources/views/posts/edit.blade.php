@extends('app')

<div class="container">
    <div class="row">
        <div class="col-md-12 m4">
            <h3>Edit Post:</h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">


<form action="{{route('post.update', $post->id)}}" method="post">
    @csrf

    <div class="form-group">
        <label for="post-title">Post Title</label>
        <input type="text" name="title" class="form-control" value="{{$post->title}}" placeholder="New Post Title">
    </div>
    
    <div class="form-group">
        <label for="post-content">Post Content</label>
        <textarea class="form-control" name="content">{{$post->content}}</textarea>
    </div>

    <input type="submit" value="Create New Post" class="btn btn-primary">
    
</form>
