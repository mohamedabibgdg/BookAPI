@extends('adminlte::page')
@section('content')
    <div class="container box">
        <div class="box-header">

        </div>
        <div class="box-body">
            <div class="col-md-4">
                <img src="{{$category->image}}" alt="">
            </div>
            Category Name : {{$category->name}}

            <br>
            <ol>
                @foreach ($category->books as $book)
                    <li><a href="{{route('books.show',$book)}}">{{$book->name}}</a></li>
                @endforeach
            </ol>
        </div>
    </div>
@stop
