@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('parts.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="content">content</label>
                <textarea required class="form-control" name="content" id="content" rows="3">{{old('content')}}</textarea>
                @error('content')
                <div class="alert alert-danger text-center">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="book_id">Book</label>
                <select required class="form-control" name="book_id" id="book_id">
                    @foreach (\App\Book::all() as $book)
                        <option value="{{$book->id}}">{{$book->name}}</option>
                    @endforeach
                </select>
                @error('book_id')
                <div class="alert alert-danger text-center">
                    {{$message}}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>

        </form>
    </div>
@stop
