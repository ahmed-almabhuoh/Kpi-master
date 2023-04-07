<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'fname' =>'string|max:100',
            'lname' =>'string|max:100',
            'email' =>'email|unique:users',
            'password' =>'confirmed',

        ];
    }
    public function messages(){
        return [//'required' => 'fname:attribute no find name users',
      // 'required' =>'lname:attribute no find name users',
       'string' => 'The:fname must be a string.',
       'string' => 'The:lname must be a string.',
        'email' =>'The:email must be a valid email address.',
        'confirmed' => 'The:passwored confirmation does not match.',
    ];
    }
}
