<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Location;
use App\Task;

class TestController extends Controller
{
    public function home(){

        return view('pages.home');
    }

    public function locations(){

        $locations=Location::all();
        return view('pages.locations',compact('locations'));
    }

    public function employees(){

        $employees=Employee::all();
        return view('pages.employees', compact('employees'));
    }
}
