<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'user_name' => 'min:4|max:50',
            'email' => 'min:4|max:250|required|unique:users',
            'password' => 'min:6|max:15|required',
            'telephone' => 'min:10|max:12|required',
            'type' => 'max:10|required',
            'name' => 'min:4|max:25|required',
            'lastname' => 'min:2|max:25|required'
        ];
    }
}
