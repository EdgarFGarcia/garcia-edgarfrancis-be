<?php

namespace App\Request\Store;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreAdd extends FormRequest
{
    /**
     * authorize
     * 
     * @return
     * bool
     */
    public function authorize() : bool
    {
        return true;
    }

    /**
     * rules
     * 
     * @return
     * array
     */
    public function rules() : array
    {
        return [
            'name'          => 'required|string',
            'address'       => 'required|string',
        ];
    }

    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json([
            'response'      => false,
            'message'       => 'Validation Error',
            'data'          => $validator->errors()
        ], 422));
    }

    public function messages(){
        return [];
    }
}