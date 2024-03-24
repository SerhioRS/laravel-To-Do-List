@extends('layouts.base')
@section('content')
    <div class="tasks">
        <div class="tasks__form">
            <form action="{{route('task.data')}}" method="post">
                @csrf
                <input formmethod="post" type="text" name="name" placeholder="task name">
                <textarea name="description"></textarea>
                <button type="submit">add</button>
            </form>
        </div>
        <div class="title">
            <h1>Tasks list</h1>
        </div>
        <div class="tasks__items">
            @if(is_array($tasks))
                @foreach($tasks as $task)
                    <div class="items__card">
                        <div class="card__name">
                            <a href="">{{ $task['name']  }}</a>
                        </div>
                        <div class="card__description">
                        <span>
                           {{ $task['description']  }}
                        </span>
                        </div>
                        <div class="card__controll">
                            <div class="controll__delete">
                                <a href="/delete/{{$task['id']}}">Delete</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>{{$tasks}}</p>
            @endif

        </div>
    </div>
@endsection
