<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class immobili extends Model
{
    use HasFactory;
    protected $table = 'immobili';
    protected $fillable = ['provincia', 'comune', 'via', 'civico', 'prezzo_affitto', 'locali_affittabili', 'locali_affittati', 'user_id'];

    public function decrementaLocaliAffittati()
    {
        $this->decrement('locali_affittati');
    }
    public function incrementaLocaliAffittati()
    {
        $this->increment('locali_affittati');
    }
}
