<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreinquiliniRequest extends FormRequest
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
            'nome' => 'required|max:255',
            'cognome' => 'required|max:255',
            'carta_identità' => 'required|max:25',
            'codice_fiscale' => 'required|max:25',
            'data_nascita' => 'required|date',
            'provincia_nascita' => 'required|max:50',
            'comune_nascita' => 'required|max:50',
            'provincia_residenza' => 'required|max:50',
            'comune_residenza' => 'required|max:50',
            'email' => 'required|email|max:255',
            'numero_telefono' => 'required|max:20',
            'data_subentro' => 'required|date',
            'contratto_lavorativo' => 'required|max:255',
        ];
    }
    public function messages(){
        return [
            'nome.required' => 'Inserire il nome',
            'nome.max' => 'Il nome può essere lungo massimo 255 caratteri',

            'cognome.required' => 'Inserire il cognome',
            'cognome.max' => 'Il cognome può essere lungo massimo 255 caratteri',

            'carta_identità.required' => "Inserire il numero della carta d'identità",
            'carta_identità.max' => "La carta d'identità può avere massimo 25 caratteri",

            'codice_fiscale.required' => 'Inserire il codice fiscale',
            'codice_fiscale.max' => 'Il codice fiscale può avere massimo 25 caratteri',

            'data_nascita.required' => 'Inserire la data di nascita',
            'data_nascita.date' => 'La data di nascita deve essere una data valida',

            'provincia_nascita.required' => 'Inserire la provincia di nascita',
            'provincia_nascita.max' => 'La provincia di nascita può essere lunga massimo 50 caratteri',

            'comune_nascita.required' => 'Inserire il comune di nascita',
            'comune_nascita.max' => 'Il comune di nascita può essere lungo massimo 50 caratteri',

            'provincia_residenza.required' => 'Inserire la provincia di residenza',
            'provincia_residenza.max' => 'La provincia di residenza può essere lunga massimo 50 caratteri',

            'comune_residenza.required' => 'Inserire il comune di residenza',
            'comune_residenza.max' => 'Il comune di residenza può essere lungo massimo 50 caratteri',

            'email.required' => 'Inserire l\'email',
            'email.email' => 'Inserire un indirizzo email valido',
            'email.max' => 'L\'email può essere lunga massimo 255 caratteri',

            'numero_telefono.required' => 'Inserire il numero di telefono',
            'numero_telefono.max' => 'Il numero di telefono può essere lungo massimo 20 caratteri',

            'data_subentro.required' => 'Inserire la data di subentro',
            'data_subentro.date' => 'La data di subentro deve essere una data valida',

            'data_uscita.date' => 'La data di uscita deve essere una data valida',

            'contratto_lavorativo.required' => 'Inserire il tipo di contratto lavorativo',
            'contratto_lavorativo.max' => 'Il contratto lavorativo può essere lungo massimo 255 caratteri',
        ];
    }
}
