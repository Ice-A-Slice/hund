@extends('layouts.app')
@section('content')


    <div class="content">
        <div class="title">
            Here we will be able to see the patterns
        </div>
    </div>
    @foreach ($patterns as $pattern)
        <div class="content">
            <div class="title">
                {{ $pattern->title }}
            </div>
        </div>
    @endforeach

    <hr>
    <form method="POST" action="/patterns">
        <label>Title:
            <input type="text" name="title">
        </label>
        <br>
        <label>Description:
            <input type="text" name="description">
        </label>
        <br>
        <label>Submit:
            <input type="submit">
        </label>
    </form>
@stop
