<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inquilini extends Model
{
    use HasFactory;
    protected $table = 'inquilini';
    protected $fillable = [
        'nome',
        'cognome',
        'carta_identità',
        'codice_fiscale',
        'data_nascita',
        'provincia_nascita',
        'comune_nascita',
        'provincia_residenza',
        'comune_residenza',
        'email',
        'numero_telefono',
        'data_subentro',
        'data_uscita',
        'contratto_lavorativo',
        'immobile_id',
    ];

    public function uscita($dataUscita)
    {
        $this->update([
            'data_uscita' => $dataUscita,
            'immobile_id' => null,
        ]);
    }
}
