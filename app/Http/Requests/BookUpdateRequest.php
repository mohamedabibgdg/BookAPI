<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookUpdateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>['sometimes','max:191'],
            'category_id'=>['sometimes'],
            'image'
        ];
    }
}
