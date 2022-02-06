<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUser extends FormRequest
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

        $uuid = $this->user ?? '';

        return [
            'name' => ['required', 'min:3', 'max:255', 'unique:users,name,{$uuid},uuid'],
            'email' => ['required', 'min:5', 'max:255', 'unique:users'],
            'cpf' => ['required', 'min:11', 'max:20', 'unique:users'],
            'rg' => ['required', 'min:7', 'max:20', 'unique:users'],
            'date_of_birth' => ['required', 'min:3', 'max:100'],
            'zip_code' => ['required', 'min:3', 'max:20'],
            'address' => ['required', 'min:3', 'max:9999'],
            'number' => ['required', 'min:1', 'max:50'],
            'city' => ['required', 'min:3', 'max:100'],
            'state' => ['required', 'min:3', 'max:100'],
        ];
    }
}
