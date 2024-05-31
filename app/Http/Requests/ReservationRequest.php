<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            'client_id' => 'exists:clients,id',
            'guest_name' => 'min:8|max:45|required',
            'initial_date' => 'required',
            'final_date' => 'required',
            'number_bedrooms' => 'required',
            'telephone' => 'min:10|max:12|required',
            'email' => 'required',
            'total_price' => 'required',
            'status' => 'required'
        ];
    }
}
