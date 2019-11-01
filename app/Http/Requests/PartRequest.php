<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'content'=>['required','max:191'],
            'book_id'=>['required','numeric'],
        ];
    }
}
