<?php

namespace App\Http\Validation;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class StoreRequestTodolists extends FormRequest
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
            'text' => 'required|min:2',
            'complete' => 'required',
        ];
    }
    public function messages()
    {
        //
        return [
            'text.required' => 'Tên không được để trống',
            'complete.required' => 'Hãng không được để trống',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        $validator->errors()->first();
        throw (new HttpResponseException(response()->json($validator, 422)));
    }
}
