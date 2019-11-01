@extends('adminlte::page')
@section('content')
    <div class="container box">
        <div class="box-header">

        </div>
        <div class="box-body">

            <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" required class="form-control"  name="name" id="name" aria-describedby="name" placeholder="name"/>
                    @error('name')
                    <div class="alert alert-danger text-center">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" required class="form-control" name="image" id="image" aria-describedby="image" placeholder="image"/>
                    @error('image')
                    <div class="alert alert-danger text-center">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@stop
