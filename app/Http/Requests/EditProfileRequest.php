<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProfileRequest extends FormRequest
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
            'username'=>'required|string',
            'position' => 'required|string',
            'email' => ['required', 'string', 'email:rfc,dns', 'max:255'],
            'password'=>'required|string|confirmed',
            'DOB' => 'required|date|before_or_equal:today',
            'gender' => 'required',
            'phone_number' => 'required|numeric|digits_between:11,12|unique:users',
            'profile_picture' => 'mimes:jpg,png,jpeg,svg',
            'CV'=>'max:2048',
            'portfolio' => 'max:2048'
        ];
    }
    
}
