@extends('adminlte::page')
@section('content')
    <div class="container box">
        <div class="box-header">

        </div>
        <div class="box-body">

            <form action="{{route('books.update',$book)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" value="{{$book->name}}"  name="name" id="name" aria-describedby="name" placeholder="name"/>
                    @error('name')
                    <div class="alert alert-danger text-center">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image"> <img src="{{$book->image}}" height="200" width="200" alt=""></label>
                    <input type="file" class="form-control" value="{{$book->image}}" name="image" id="image" aria-describedby="image" placeholder="image"/>
                    @error('image')
                    <div class="alert alert-danger text-center">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category_id">Categories</label>
                    <select class="form-control" name="category_id" id="category_id">
                        @foreach (\App\Category::all() as $category)
                            <option value="{{$category->id}}"  {{($category->id==$book->category['id'])?'selected':''}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <div class="alert alert-danger text-center">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-warning">Edit</button>
            </form>
        </div>
    </div>
@stop
