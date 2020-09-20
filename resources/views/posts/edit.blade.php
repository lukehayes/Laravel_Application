@extends('layouts.app')

@section('main')

@if($errors->any())
<div class="container">
    @foreach ($errors->all() as $error)
        <div class="message is-danger">{{ $error }}</div>
    @endforeach
</div>
@endif

<div class="section">
    <div class="columns is-centered">
        <div class="column is-8">
            <h3 class="title is-5">Edit Post:</h3>
        </div>
    </div>

    <div class="columns is-centered is-variable is-1-desktop">
        <div class="column is-8">

            <form action="{{route('post.update', $post->id )}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                @csrf
                <div class="field">
                    <label class="label" for="post-title">Post Title:</label>
                    <div class="control">
                        <input type="text" name="title" class="input" value="{{$post->title}}" placeholder="New Post Title">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="post-content">Post Content:</label>
                    <div class="control">
                        <textarea class="textarea" name="content" cols="30" rows="10">{{$post->content}}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="category">Programming Language:</label>

                    <div class="control">
                        <div class="select">
                            <select name="category" class="input" required>
                                @foreach($categories as $c)
                                <option value="{{$c->category}}">{{$c->category}}</option>
                                @endforeach()
                            </select>
                        </div>
                    </div>

                </div>

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-link is-light">Update Post</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection('main')
