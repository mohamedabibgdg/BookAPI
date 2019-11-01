<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartUpdateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'content'=>['sometimes','max:191'],
            'book_id'=>['sometimes'],
        ];
    }
}
