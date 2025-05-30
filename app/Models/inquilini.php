<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
        'user_id',
        'immobile_id',
        'stanza_id',
    ];

    public function uscita($dataUscita)
    {
        $dataUscita = Carbon::createFromFormat('d-m-Y', $dataUscita)->format('Y-m-d');
        $this->update([
            'data_uscita' => $dataUscita,
            'immobile_id' => null,
            'stanza_id' => null,
        ]);
        return $dataUscita;
    }
}
