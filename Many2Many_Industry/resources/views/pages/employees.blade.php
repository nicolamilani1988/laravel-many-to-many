@extends('layouts.main-layout')
@section('content')

    <div id="employees">
        <h1>Employee</h1>
        <ul class="horizontal">
            @foreach ($employees as $employee)
                <li>
                    <h2>{{$employee->id}}. {{$employee->firstname}} {{$employee->lastname}}</h2>
                    <div><u>Country: {{$employee->location->state}}</u></div>
                    <h3 class="task-list">Tasks Made:</h3>
                    <ul>
                        @foreach ($employee->tasks as $task)
                            <li>{{$task->title}}</li>                            
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
 
@endsection