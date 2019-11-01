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
        alert('Part','Part Created.', 'success');
        return back();
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
        alert('Part','Part Updated.', 'success');
        return back();
    }

    public function destroy(Part $part)
    {
        $part->delete();
        alert('Part','Part Deleted.', 'success');
        return back();
    }
}
