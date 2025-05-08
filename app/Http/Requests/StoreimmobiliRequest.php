<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreimmobiliRequest extends FormRequest
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
            'provincia'=>'required|max:2',
            'comune'=>'required|max:50',
            'indirizzo'=>'required|max:50',
            'civico'=>'required',
        ];
    }
    public function messages(){
        return[
            'provincia.required'=>'Inserire provincia',
            'provincia.max'=>'La provincia puo essere massimo di 2 caratteri',
            'comune.required'=>'Inserire comune',
            'comune.max'=>'Il comune può essere di massimo 50 caratteri',
            'indirizzo.required'=>'Inserire indirizzo',
            'indirizzo.max'=>'La via può essere di massimo 50 caratteri',
            'civico.required'=>'Inserire civico',
        ];
    }
}
