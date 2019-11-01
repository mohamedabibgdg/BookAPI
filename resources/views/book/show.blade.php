@extends('layouts.app')
@section('content')
    <div class="container">
            <div class="col-md-4">
                <img src="{{$book->image}}" alt="">
            </div>
        Book Name: {{$book->name}}
        <br>
        category : {{$book->category->name}}
    </div>
@stop
