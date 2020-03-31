<?php

namespace App\Http\Requests;

use App\Bill;
use Illuminate\Foundation\Http\FormRequest;

class StoreBillRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('bill_create');
    }

    public function rules()
    {
        return [
            'name' => [
               'required',
            ],
            'mobileNo' => [
               'required',
            ], 
            'GstNo' => [
               'required',
            ], 
        ];
    }
}
