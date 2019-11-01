@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{route('category.create')}}" class="btn btn-primary mb-2">Category create</a>

        <div class="card p-3">
            @if ($categories->count()>0)
                <table class="table table-hover">
                    <tr>
                        <td>#</td>
                        <td>Name</td>
                        <td>Image</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                    @foreach ($categories as $key=> $category)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td><a href="{{route('category.show',$category)}}">{{$category->name}}</a></td>
                            <td><img src="{{$category->image}}" height="50" width="50" alt=""></td>
                            <td><a href="{{route('category.edit',$category)}}" class="btn btn-warning">edit</a></td>
                            <td>
                                <form action="{{route('category.destroy',$category)}}" method="POST">@csrf @method('delete')
                                    <button class="btn btn-danger">delete</button> </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{$categories->links()}}
            @else
                <div class="alert alert-info text-center">
                    No Categories
                </div>
            @endif
        </div>
    </div>
@stop
