@extends('app')

<div class="container">
    <div class="row">
        <div class="col-md-12 m4">
            <h3>Create a new post:</h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">


<form action="{{route('post.store')}}" method="post">
    @csrf

    <div class="form-group">

         <label for="post-title">Post Title</label>
        <input type="text" name="title" class="form-control" value="" placeholder="New Post Title">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    
    <div class="form-group">
        <label for="post-content">Post Content</label>
        <textarea class="form-control" name="content" cols="30" rows="10"></textarea>
    </div>

    <input type="submit" value="Create New Post" class="btn btn-primary">
    
</form>

        </div>
    </div>
</div>
