<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorestanzeRequest extends FormRequest
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
            'nome_stanza'=>'required|max:255',
            'prezzo_affitto'=>'required',
        ];
    }
    public function messages(){
        return[
            'nome_stanza.required' => 'Inserire nome stanza',
            'nome_stanza.max' => 'Il nome può essere lungo massimo 255 caratteri',
            'prezzo_affitto.required' => 'Inserire prezzo affitto',
            'prezzo_affitto.max' => 'Il prezzo può essere lungo 10 caratteri',
        ];
    }
}
