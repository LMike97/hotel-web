<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BedroomPhotoRequest extends FormRequest
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
            'bedroom_id' => 'exists:bedrooms,id|required',
            'name' => 'required|image|mimes:jpg,jpeg,png,gif,svg,webp|max:2048'
        ];
    }
}
