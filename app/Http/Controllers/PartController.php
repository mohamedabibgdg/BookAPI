<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartRequest;
use App\Part;
use Illuminate\Http\Request;

class PartController extends Controller
{
    public function index(){
        return view('part.index')->with([
            'parts'=>Part::paginate()
        ]);
    }

    public function create(){
        return view('part.create');
    }

    public function store(PartRequest $request)
    {
        $data=$request->validated();
        Part::create($data);
        return back()->with('done','Part Added.');
    }

    public function show(Part $part){
        return view('part.show',compact('part'));
    }

    public function edit(Part $part){
        return view('part.edit',compact('part'));

    }

    public function update(PartRequest $request, Part $part){
        $data=$request->validated();
        $part->update($data);
        return back()->with('done','Part Updated.');
    }

    public function destroy(Part $part)
    {
        $part->delete();
        return back()->with('done','Part Deleted.');
    }
}
