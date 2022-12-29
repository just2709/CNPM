<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColorFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                'string'
            ],
            'code' => [
                'required',
                'string'
            ],
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Tên chất liệu là bắt buộc',
            'code.required' => 'Mô tả chất liệu là bắt buộc',
        ];
    }
}
