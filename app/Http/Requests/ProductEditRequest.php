<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductEditRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'product_name' => 'required',
            'product_photo' => 'nullable|file|mimes:png,jpeg,bmp|max:10240|image',
//            'product_country' => 'required',
            'product_price' => 'required|numeric|min:0',
            'category_id' => 'required|numeric',
            'product_count' => 'required|numeric',
            'product_description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Это поле обязательно для заполнения',
            'category_id.numeric' => 'выберите категорию товара',
            'product_price.numeric' => 'Цена указывается только цифрами',
            'product_count.numeric' => 'Количество указывается цифрами',
            'mimes' => 'Допускаются файлы: png, jpeg, bmp',
            'min' => 'Цена > 0',
        ];
    }
}
