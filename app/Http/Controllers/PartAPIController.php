<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartRequest;
use App\Http\Requests\PartUpdateRequest;
use App\Http\Resources\PartCollection;
use App\Http\Resources\PartResource;
use App\Part;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PartAPIController extends Controller
{
    public function index(){
//        return new PartCollection(Part::paginate());
        try {
            return PartResource::collection(Part::all());
        } catch (\Exception $e) {
            return response()->json($e,Response::HTTP_FORBIDDEN);
        }

    }

    public function store(PartRequest $request){
        try {
            return new PartResource(Part::create($request->validated()));

        } catch (\Exception $e) {
            return response()->json($e,Response::HTTP_FORBIDDEN);
        }

    }

    public function show(Part $part){
        try {
            return new PartResource($part);

        } catch (\Exception $e) {
            return response()->json($e,Response::HTTP_FORBIDDEN);
        }

    }

    public function update(PartUpdateRequest $request, Part $part){
        try {
            $part->update($request->validated());
            return new PartResource($part);

        } catch (\Exception $e) {
            return response()->json($e,Response::HTTP_FORBIDDEN);
        }

    }

    public function destroy(Part $part){
        try {
            $data=new PartResource($part);
            $part->delete();
            return $data;
        } catch (\Exception $e) {
            return response()->json($e,Response::HTTP_FORBIDDEN);
        }

    }

}
