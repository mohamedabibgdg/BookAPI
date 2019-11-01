@extends('adminlte::page')
@section('content')
    <div class="container box">
        <div class="box-header">

        </div>
        <div class="box-body row">
            <div class="col-md-12">
                Category Name : {{$category->name}}
                <br>
                <ol>
                    @foreach ($category->books as $book)
                        <li><a href="{{route('books.show',$book)}}">{{$book->name}}</a></li>
                    @endforeach
                </ol>
            </div>

            <div class="col-md-12">
                <img src="{{$category->image}}">
            </div>

        </div>
    </div>
@stop
