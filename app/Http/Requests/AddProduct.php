<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProduct extends FormRequest
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
            'txtTenSp'  =>  'required',
            'txtMota' => 'required',
            'txtSoluong' =>'required|numeric',
            'category_id' =>'required'
        ];
    }
    public function messages()
    {
        return [
            'txtTenSp.required'  =>  'Tên sản phẩm không được để trống',
            'txtMota.required'  =>  'Mô tả không được để trống',
            'txtSoluong.required'  =>  'Số lượng không được bỏ trống và phải là số nguyên',
        ];
    }
}
