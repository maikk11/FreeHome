<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class storico_inquilini extends Model
{
    use HasFactory;
    protected $table = 'storico_inquilini';
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
        'stanza_id',
    ];
}
