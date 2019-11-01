@extends('adminlte::page')
@section('content')
    <div class="container box">
        <div class="box-header">
        <a href="{{route('parts.create')}}" class="btn btn-primary mb-2">Part create</a>
        </div>
        <div class="box-body">
            <div class="card p-3">
                @if ($parts->count()>0)
                    <table class="table table-hover">
                        <tr>
                            <td>#</td>
                            <td>content</td>
                            <td>Book Name</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                        @foreach ($parts as $key=> $part)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$part->content}}</td>
                                <td>{{$part->book->name ?? 'Deleted'}}</td>
                                <td><a href="{{route('parts.edit',$part)}}" class="btn btn-warning">edit</a></td>
                                <td>
                                    <form action="{{route('parts.destroy',$part)}}" method="POST">@csrf @method('delete')
                                        <button class="btn btn-danger">delete</button> </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{$parts->links()}}
                @else
                    <div class="alert alert-info text-center">
                        No Parts
                    </div>
                @endif
            </div>
        </div>
    </div>

@stop
