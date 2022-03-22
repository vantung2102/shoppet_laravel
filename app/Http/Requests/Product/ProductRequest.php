<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required',
            'count' => 'required',
            'content' => 'required',
            'price' => 'required',
            'price_sale' => 'required',
            'thumbnail' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'count.required' => 'Vui lòng nhập số lượng sản phẩm,',
            'content.required' => 'Vui lòng nhập nhập nội dung',
            'price.required' => 'Vui lòng nhập giá',
            'price_sale.required' => 'Vui lòng nhập giá sale',
            'thumbnail.required' => 'Vui lòng chọn ảnh sản phẩm',
        ];
    }
}