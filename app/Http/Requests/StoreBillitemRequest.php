<?php

namespace App\Http\Requests;

use App\BillItem;
use Illuminate\Foundation\Http\FormRequest;

class StoreBillitemRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('BillItems_create');
    }

    public function rules()
    {
        return [
            'name' => [
               'required',
            ]
           
        ];
    }
}
