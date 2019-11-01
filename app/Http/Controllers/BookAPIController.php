<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\BookRequest;
use App\Http\Resources\BookResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookAPIController extends Controller{

    public function index(){
//        return new BookCollection(Book::paginate());
        try {
            return BookResource::collection(Book::all());
        } catch (\Exception $e) {
            return response()->json($e,Response::HTTP_FORBIDDEN);
        }
    }

    public function store(BookRequest $request){

        try {
            $data=$request->validated();
            if ($request->hasFile('image')) $data['image']=$this->uploadImage($request);
            return new BookResource(Book::create($data));

        } catch (\Exception $e) {
            return response()->json($e,Response::HTTP_FORBIDDEN);
        }

    }

    public function show(Book $book){
        return new BookResource($book);
    }

    public function update(Request $request, Book $book){

        try {
            $data=$request->validate([
                'name'=>['sometimes','max:191'],
                'category_id'=>['sometimes'],
                'image'
            ]);
            if ($request->hasFile('image')) $data['image']=$this->uploadImage($request);
            $book->update($data);
            return new BookResource($book);

        } catch (\Exception $e) {
            return response()->json($e,Response::HTTP_FORBIDDEN);
        }

    }

    public function destroy(Book $book){
        try {

            $data=new BookResource($book);
            $book->delete();
            return $data;

        } catch (\Exception $e) {
            return response()->json($e,Response::HTTP_FORBIDDEN);
        }

    }
}
