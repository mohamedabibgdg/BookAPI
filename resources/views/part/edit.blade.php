@extends('adminlte::page')
@section('content')
    <div class="container box">
        <div class="box-header">

        </div>
        <div class="box-body">

            <form action="{{route('parts.update',$part)}}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="content">content</label>
                    <textarea class="form-control" name="content" id="content" rows="3">{{old('content') ?? $part->content}}</textarea>
                    @error('content')
                    <div class="alert alert-danger text-center">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="book_id">Book</label>
                    <select class="form-control" name="book_id" id="book_id">
                        @foreach (\App\Book::all() as $book)
                            <option value="{{$book->id}}" {{($book->id==$part->book->id)?'selected':''}}>{{$book->name}}</option>
                        @endforeach
                    </select>
                    @error('book_id')
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
