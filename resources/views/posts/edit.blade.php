@extends('app')

<form action="{{route('post.update', $post->id )}}" method="post">
    <input type="text" name="title" id="post-title" value="{{$post->title}}">

    <textarea id="post-content" name="content" cols="30" rows="10">{{$post->content}}</textarea>
    
<input type="submit" value="Update">
</form>
