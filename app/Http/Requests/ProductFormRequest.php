<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'category_id' => [
                'required',
                'integer',
            ],
            'material_id' => [
                'integer',
                'nullable'
            ],
            'name' => [
                'required',
                'string'
            ],
            'description' => [
                'required',
                'string'
            ],
            'original_price' => [
                'required',
                'integer'
            ],
            'quantity' => [
                'integer',
                'nullable'
            ],
            'sell_price' => [
                'required',
                'integer',
            ],
            'images' => [
                'nullable',
                'image|mimes:jpg,jpeg,png'
            ]
        ];
    }
    public function messages()
    {
        return[
            'category_id.required' => 'Vui lòng chọn loại sản phẩm',
            // 'material_id.required' => 'Vui lòng chọn chất liệu',
            'original_price.required' => 'Vui lòng thêm giá gốc',
            'sell_price.required' => 'Vui lòng thêm giá bán',
            'name.required' => 'Tên loại sản phẩm là bắt buộc',
            'description.required' => 'Mô tả loại sản phẩm là bắt buộc',
        ];
    }
}
