<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('category.index')->with([
            'categories'=>Category::paginate()
        ]);
    }

    public function create(){
        return view('category.create');
    }

    public function store(CategoryRequest $request){
        $data=$request->validated();
        if ($request->hasFile('image')) {
            $data['image']=$this->uploadImage($request);
        }
        Category::create($data);
        alert('Category','Category Created.', 'success');
        return back();
    }

    public function show(Category $category){
        return view('category.show',compact('category'));
    }

    public function edit(Category $category){
        return view('category.edit',compact('category'));
    }

    public function update(CategoryRequest $request, Category $category){
        $data=$request->validated();
        if ($request->hasFile('image')) {
            $data['image']=$this->uploadImage($request);
        }
        $category->update($data);
        alert('Category','Category Updated.', 'success');
        return back();
    }

    public function destroy(Category $category){
        $category->delete();
        alert('Category','Category Deleted.', 'success');
        return back();
    }
}
