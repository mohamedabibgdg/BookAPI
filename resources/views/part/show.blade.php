@extends('adminlte::page')
@section('content')
    <div class="container box">
        <div class="box-header">
            <a href="{{route('books.show',$part->book)}}">{{$part->book->name}}</a>(book)
        </div>
        <div class="box-body">
            {{$part->content}}
        </div>
    </div>
@stop
