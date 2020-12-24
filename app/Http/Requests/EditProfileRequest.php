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
            'DOB' => 'required|date|before_or_equal:today',
            'gender' => 'required',
            'phone_number' => 'required|numeric|digits_between:11,12',
            'profile_picture' => 'mimes:jpg,png,jpeg,svg',
            'card_identity' => 'mimes:jpg,png,jpeg,svg'
        ];
    }
}
