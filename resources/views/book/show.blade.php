@extends('adminlte::page')
@section('content')
    <div class="container box">
        <div class="box-header">

        </div>
        <div class="box-body row">
            <div class="col-md-12">

                Book Name: {{$book->name}}
                <br>
                    category : <a class="label label-danger" href="{{route('category.show',$book->category)}}">{{$book->category->name}}</a>

                <ol>
                    @foreach ($book->parts as $part)
                        <li><a class="label label-info"  href="{{route('parts.show',$part)}}">{{substr($part->content,0,50)}}...</a></li>
                    @endforeach
                </ol>
            </div>
            <div class="col-md-12">
                <img src="{{$book->image}}" alt="">
            </div>

        </div>
    </div>
@stop
