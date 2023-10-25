<?php

namespace App\Http\Validation;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class StoreRequest extends FormRequest
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
            //
            'username' => 'required|min:2|max:20',
            'password' => 'required|min:2|max:20',
        ];
    }
    public function messages()
    {
        //
        return [
            'username.required' => 'Tên không được để trống',
            'password.required' => 'Hãng không được để trống',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        $validator->errors()->first();
        throw (new HttpResponseException(response()->json($validator, 422)));
    }
}
