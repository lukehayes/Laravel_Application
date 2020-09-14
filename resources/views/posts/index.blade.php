@extends('app')

@section('main')

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <p>All Posts:</p>
        </div>
    </div> <!-- .row -->

@if (session('status'))
    <div class="alert alert-success ">
        {{ session('status') }}
    </div>
@endif

<div class="row">
@foreach($posts as $post)
    <div class="col-md-12 mb-5">
        <h2><a href="{{route('post.show', $post->id)}}">{{$post->title}}<a></h2>
        <p>{{ $post->content }}</p>
        <a href="{{route('post.edit', $post->id)}}" class="btn-sm btn-secondary">Edit this post.</a>
        <a href="{{route('post.destroy', $post->id)}}" class="btn-sm btn-danger ">Delete</a>
    </div>
@endforeach

</div> <!-- .row -->
</div> <!-- .container -->


@endsection('main')
