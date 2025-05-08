<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stanze extends Model
{
    use HasFactory;
    protected $table = 'stanze';
    protected $fillable = ['nome_stanza', 'prezzo_affitto', 'immobile_id'];
}
