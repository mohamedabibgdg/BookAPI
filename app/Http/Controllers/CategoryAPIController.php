<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Response;

class CategoryAPIController extends Controller
{

    public function index(){
        try {
            return CategoryResource::collection(Category::all());

        } catch (\Exception $e) {
            return response()->json($e,Response::HTTP_FORBIDDEN);
        }
    }

    public function store(CategoryRequest $request){

        try {
            $data=$request->validated();
            if ($request->hasFile('image')) $data['image']=$this->uploadImage($request);
            return new CategoryResource(Category::create($data));
        } catch (\Exception $e) {
            return response()->json($e,Response::HTTP_FORBIDDEN);
        }
    }

    public function show(Category $category){
        try {
            return new CategoryResource($category);
        } catch (\Exception $e) {
            return response()->json($e,Response::HTTP_FORBIDDEN);
        }

    }

    public function update(CategoryUpdateRequest $request, Category $category){
        try {
            $data=$request->validated();
            if ($request->hasFile('image')) $data['image']=$this->uploadImage($request);
            if(isset($request->name)) $category->update($data['name']);
            return new CategoryResource($category);
        } catch (\Exception $e) {
            return response()->json($e,Response::HTTP_FORBIDDEN);
        }

    }

    public function destroy(Category $category){
        try {
            $data=new CategoryResource($category);
            $category->delete();
            return  $data;
        } catch (\Exception $e) {
            return response()->json($e,Response::HTTP_FORBIDDEN);
        }

    }

}
