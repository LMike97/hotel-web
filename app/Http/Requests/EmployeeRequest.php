<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'user_id' => 'exists:users,id|required|unique:employees,user_id',
            'hotel_id' => 'exists:hotels,id|required',
            'first_name' => 'min:4|max:25|required',
            'second_name' => 'max:25',
            'first_lastname' => 'min:2|max:25|required',
            'second_lastname' => 'min:2|max:25',
            'direction' => 'required',
            'position' => 'required'
        ];
    }
}
