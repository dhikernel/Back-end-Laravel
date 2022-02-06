<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateVehicle extends FormRequest
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
            'license_plate' => ['required'],
            'model' => ['required'],
            'color' => ['required'],
            'type'  => ['required'],
            'user'  =>  ['required', 'exists:users,uuid'],
        ];
    }
}
