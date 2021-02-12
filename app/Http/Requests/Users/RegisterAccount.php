<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class RegisterAccount extends FormRequest
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
            'name' => ['required' , 'string' , 'min:5' , 'max:20'],
            'email' => ['email' , 'unique:users,email'],
            'mobile' => ['string' , 'min:11' , 'max:11' , 'unique:users,mobile'],
            'password' => ['string' , 'min:6' , 'confirmed']
        ];
    }
}
