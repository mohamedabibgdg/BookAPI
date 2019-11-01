<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index(){
        return view('book.index')->with([
            'books'=>Book::paginate()
        ]);
    }

    public function create(){
        return view('book.create');
    }

    public function store(BookRequest $request){
        $data=$request->validated();
        if ($request->hasFile('image')) {
            $data['image']=$this->uploadImage($request);
        }

        Book::create($data);
        return back()->with('done','Book Added.');
    }

    public function show(Book $book){
        return view('book.show',compact('book'));
    }

    public function edit(Book $book){
        return view('book.edit',compact('book'));

    }

    public function update(BookRequest $request, Book $book)
    {
        $data=$request->validated();
        if ($request->hasFile('image')) {
            $data['image']=$this->uploadImage($request);
        }
        $book->update($data);
        return back()->with('done','Book Updated.');
    }
    public function destroy(Book $book)
    {
        $book->delete();
        return back()->with('done','Book Deleted.');
    }
}
