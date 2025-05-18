<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class causaliSpeseRicavi extends Model
{
    use HasFactory;
    protected $table = 'causali_spese_ricavi';
    protected $fillable = ['segno', 'causale', 'descrizione', 'user_id'];

    public static function segni(){
        $segni = [
            '+' => 'Entrate',
            '-' => 'Uscite',
        ];
        return $segni;
    }
}
