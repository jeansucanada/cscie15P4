@extends('layouts.master')

@section('title')
    All Kids
@stop

@section('homemenu')

@stop
@section('addkidmenu')
    class="active"
@stop
@section('addphotomenu')

@stop

@section('content')

    <h1>All Kids</h1>

    @if(sizeof($kids) == 0)
        You have not added any kids.
    @else

        @foreach($kids as $kid)
            <div>
                <h4>Name: {{ $kid->name }}</h4>
                <h4>Gender: {{ $kid->getGender() }}</h4>
                <a href='/kids/edit/{{$kid->id}}'>Edit</a> |
                <a href='/kids/confirm-delete/{{$kid->id}}'>Delete</a><br>
                <hr>
            </div>
        @endforeach
    @endif

@stop
