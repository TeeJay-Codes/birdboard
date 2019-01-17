@extends('layouts.app')
@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <p class="text-grey text-sm font-normal">
                <a class="text-grey text-sm font-normal no-underline" href="/projects">My Projects</a> / {{ $project->title}}</p>
            <a href="/projects/create" class="button">New Project</a>
        </div>
        
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-8">
                    <h2 class="text-lg text-grey font-normal mb-3">Tasks</h2>
                    @foreach($project->tasks as $task)
                        <div class="card mb-3">
                            <form method="POST" action="{{ $task->path() }}">
                                @method('PATCH')
                                @csrf
                                <div class="flex">
                                    <input type="text" value="{{ $task->body }}" class="w-full {{ $task->completed ? 'text-grey' : ''}}" name="body" value="{{ $task->body }}">
                                    <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                                </div>
                            </form>
                            
                        </div>
                    @endforeach
                    <div class="card">
                        <form method="POST" action="{{ $project->path() . '/tasks'}}">
                            @csrf
                            <input type="text" class="w-full" name="body" placeholder="Add a new task">
                        </form>
                    </div>
                </div>

                <div class="mb-6">
                    <h2 class="text-lg text-grey font-normal mb-3">General Notes </h2>
                    <textarea  name="body" class="card w-full" style="min-height: 200px;">
                        Lorem ipsum
                    </textarea>
                </div>
            </div> 

            <div class="lg:w-1/4 px-3">
                @include('projects.card')
            </div>
        </div>
    </main>
       
@endsection()
