@extends('app')


@section('main')

<div class="section">
    <div class="columns is-centered is-tablet">
        <div class="column is-8">
            <h3>Create a new post:</h3>
        </div>
    </div>
</div>

<div class="section">
    <div class="columns is-centered">
        <div class="column is-8 is-hcentered ">

            <form action="{{route('post.store')}}" method="post">
                @csrf
                <div class="field">
                    <label class="label" for="post-title">Post Title:</label>
                    <div class="control">
                        <input type="text" name="title" class="input" value="" placeholder="New Post Title">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="post-content">Post Content:</label>
                    <div class="control">
                        <textarea class="textarea" name="content" cols="30" rows="10"></textarea>
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
                        <button type="submit" class="button is-link is-light">Create Post</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection('main')
