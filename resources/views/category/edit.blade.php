@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('category.update',$category)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" value="{{$category->name}}"  name="name" id="name" aria-describedby="name" placeholder="name"/>
                @error('name')
                <div class="alert alert-danger text-center">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">
                    <img src="{{$category->image}}" height="200" width="200" alt="">
                </label>
                <input type="file" class="form-control" value="" name="image" id="image" aria-describedby="image" placeholder="image"/>
                @error('image')
                <div class="alert alert-danger text-center">
                    {{$message}}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-warning">Edit</button>
        </form>
    </div>
@stop
