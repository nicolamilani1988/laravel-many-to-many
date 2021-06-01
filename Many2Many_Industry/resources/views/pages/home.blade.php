@extends('layouts.main-layout')
@section('content')

    <div id="homepage">
        <div>
            View <a class="blu-text" href="{{route('locations')}}">Locations</a>
        </div>
        <div>
            View <a class="blu-text"  href="{{route('employees')}}">Employees</a>
        </div>
    </div>
 
@endsection