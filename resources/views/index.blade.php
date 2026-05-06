@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="index">
        <h1 class="index__title">Todo List</h1>
        <div class="index__list">
            @foreach ($todos as $todo)
                <a href="{{ route('todos.show', $todo->id) }}" class="index__item">
                    {{ $todo->title }}
                </a>
            @endforeach
        </div>
    </div>
@endsection