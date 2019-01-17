@extends('layouts.app')
@section('content')
        <h1>Create new Project</h1>
        <form action="/projects" method="POST">
            @csrf
            <div>
                <label>Title</label>
                <input type="text" name="title">
            </div>
            <div>
                <label>Description</label>
                <textarea name="description">
                </textarea>
            </div>
            <input type="submit">
            <a href="/projects">Cancel</a>
        </form>

@endsection
