@extends('adminlte::page')
@section('content')
    <div class="container box">
        <div class="box-header">

        </div>
        <div class="box-body">
            <div class="col-md-4">
                <img src="{{$book->image}}" alt="">
            </div>
            Book Name: {{$book->name}}
            <br>
            category : {{$book->category->name}}
        </div>
    </div>
@stop
