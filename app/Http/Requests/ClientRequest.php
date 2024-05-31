<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'user_id' => 'exists:users,id|required|unique:clients,user_id',
            'first_name' => 'min:4|max:25|required',
            'second_name' => 'max:25',
            'first_lastname' => 'min:2|max:25|required',
            'second_lastname' => 'max:25'
        ];
    }
}
