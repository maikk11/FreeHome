<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorespeseRicaviRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'causale'=>'required|max:255',
            'valore'=>'required',
            'data'=>'required',
        ];
    }
    public function messages(){
        return[
            'causale.required'=>'Inserire causale',
            'valore.required'=>'Inserire valore',
            'data.required'=>'inserire data',
        ];
    }
}
