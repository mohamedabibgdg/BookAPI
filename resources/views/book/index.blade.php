@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{route('books.create')}}" class="btn btn-primary mb-2">Book create</a>

        <div class="card p-3">
            @if ($books->count()>0)
                <table class="table table-hover">
                    <tr>
                        <td>#</td>
                        <td>Name</td>
                        <td>Image</td>
                        <td>Category</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                    @foreach ($books as $key=> $book)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td><a href="{{route('books.show',$book)}}">{{$book->name}}</a></td>
                            <td><img src="{{$book->image}}" width="50" height="50" alt=""></td>
                            <td>{{$book->category->name ?? 'Deleted'}}</td>
                            <td><a href="{{route('books.edit',$book)}}" class="btn btn-warning">edit</a></td>
                            <td>
                                <form action="{{route('books.destroy',$book)}}" method="POST">@csrf @method('delete')
                                    <button class="btn btn-danger">delete</button> </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{$books->links()}}
            @else
                <div class="alert alert-info text-center">
                    No Books
                </div>
            @endif
        </div>
    </div>
@stop
