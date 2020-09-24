@extends('layouts.app')


@if($errors->any())
<div class="section">
    <div class="columns">
        @foreach ($errors->all() as $error)
        <div class="column is-full">
            <div class="message is-danger">{{ $error }}</div>
        </div>
        @endforeach
    </div>
</div>
@endif

@section('login')
<div class="section">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-8">

                <form action="{{route('login')}}" method="POST">
                    @csrf

                    <div class="field">
                        <label class="label" for="">Email Address:</label>
                        <div class="control">
                            <input type="text" name="email" class="input">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="">Password:</label>
                        <div class="control">
                            <input type="password" name="password" class="input">
                        </div>
                    </div>

                    <button type="submit" class="button is-outline is-dark">Login</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection('login')
