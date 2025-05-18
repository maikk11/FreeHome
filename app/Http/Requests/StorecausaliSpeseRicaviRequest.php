<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorecausaliSpeseRicaviRequest extends FormRequest
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
            'segno'=>'required',
            'causale'=>'required|max:255',
            'descrizione'=>'required|max:25',
        ];
    }
    public function messages(){
        return[
            'segno.required'=>'Inserire segno',
            'causale.required'=>'Inserire causale',
            'descrizione.required'=>'inserire causale',
        ];
    }
}
