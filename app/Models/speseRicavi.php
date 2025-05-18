<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class speseRicavi extends Model
{
    use HasFactory;
    protected $table = 'spese_ricavi';
    protected $fillable = ['causale', 'valore', 'data', 'user_id', 'immobile_id'];
}
