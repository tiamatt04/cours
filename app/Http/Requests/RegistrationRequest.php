<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'name' => 'required|regex:/^[А-Яа-яЁё\s-]+$/u',
            'surname' => 'required|regex:/^[А-Яа-яЁё\s-]+$/u',
            'login' => 'required|unique:users|regex:/^[A-Za-z0-9-]+$/u',
            'number' => 'required|unique:users|regex:/^\+7(\d{3})\d{7}$/',
            'password' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Это поле обязательно для заполнения',
            'unique' => 'Значение уже занято',
            'name.regex' => 'Разрешены только кириллица, пробел и тире',
            'surname.regex' => 'Разрешены только кириллица, пробел и тире',
            'login.regex' => 'Разрешены только латиница, цифры и тире',
            'number.regex' => 'Введите корректный номер телефона',
            'min' => 'Пароль должен содержать не меньше 6 символов',
        ];
    }
}
