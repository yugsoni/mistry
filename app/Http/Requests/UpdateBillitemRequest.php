<?php

namespace App\Http\Requests;

use App\BillItem;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBillitemRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('BillItems_edit');
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
