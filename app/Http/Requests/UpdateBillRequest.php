<?php

namespace App\Http\Requests;

use App\Bill;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBillRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('Bill_edit');
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
