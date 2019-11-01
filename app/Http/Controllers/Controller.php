<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function uploadImage($request,$inputName='image',$location='uploads'){
            if ($request->hasFile($inputName)){
                $request->validate([$inputName=>['required','image','mimes:jpeg,jpg,png','max:10000']]);
                $imageName=rtrim($location,'/').'/'.$inputName."_".rand(100000,time()).uniqid('', true).'.'.$request->file($inputName)->getClientOriginalExtension();
                $request->file($inputName)->move(public_path($location),$imageName);
                return $imageName;
            }
            return null;
    }
}
