<?php

namespace App\Http\Requests;

use App\Bill;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyProductRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('Bill_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'billNo'   => 'required|array',
            'billNo' => 'exists:bills,billNo',
        ];
    }
}
