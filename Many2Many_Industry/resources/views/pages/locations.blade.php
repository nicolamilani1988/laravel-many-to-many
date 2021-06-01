@extends('layouts.main-layout')
@section('content')

    <div id="locations">
        <h1>Location</h1>
        <ul>
            @foreach ($locations as $location)
                <li>
                    <h2>{{$location->id}}. {{$location->state}}</h2>
                    <div class="small-text">{{$location->address}}, {{$location->postcode}}</div>
                    <h3 class="list-title">Employees from {{$location->state}}</h3>
                    <ul class="employee-list">
                        @foreach ($location->employees as $employee)
                            <li>
                                {{$employee->firstname}} {{$employee->lastname}}
                            </li>
                        @endforeach
                    </ul>               
                </li>
            @endforeach
        </ul>
    </div>
 
@endsection