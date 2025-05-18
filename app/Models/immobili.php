<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class immobili extends Model
{
    use HasFactory;
    protected $table = 'immobili';
    protected $fillable = ['provincia', 'comune', 'indirizzo', 'civico', 'locali_affittabili', 'locali_affittati', 'user_id'];

    public function decrementaLocaliAffittati()
    {
        $this->decrement('locali_affittati');
    }
    public function incrementaLocaliAffittati()
    {
        $this->increment('locali_affittati');
    }

    public function incrementaLocali(){
        $this->increment('locali_affittabili');
    }

    public function decrementaLocali(){
        $this->decrement('locali_affittabili');
    }

    public static function province(){
        $province = [
        'Agrigento', 'Alessandria', 'Ancona', 'Aosta', 'Arezzo', 'Ascoli Piceno',
        'Asti', 'Avellino', 'Bari', 'Barletta-Andria-Trani', 'Belluno', 'Benevento',
        'Bergamo', 'Biella', 'Bologna', 'Bolzano', 'Brescia', 'Brindisi', 'Cagliari',
        'Caltanissetta', 'Campobasso', 'Caserta', 'Catania', 'Catanzaro', 'Chieti',
        'Como', 'Cosenza', 'Cremona', 'Crotone', 'Cuneo', 'Enna', 'Fermo', 'Ferrara',
        'Firenze', 'Foggia', 'Forlì-Cesena', 'Frosinone', 'Genova', 'Gorizia',
        'Grosseto', 'Imperia', 'Isernia', 'La Spezia', 'L\'Aquila', 'Latina', 'Lecce',
        'Lecco', 'Livorno', 'Lodi', 'Lucca', 'Macerata', 'Mantova', 'Massa-Carrara',
        'Matera', 'Messina', 'Milano', 'Modena', 'Monza e della Brianza', 'Napoli',
        'Novara', 'Nuoro', 'Oristano', 'Padova', 'Palermo', 'Parma', 'Pavia',
        'Perugia', 'Pesaro e Urbino', 'Pescara', 'Piacenza', 'Pisa', 'Pistoia',
        'Pordenone', 'Potenza', 'Prato', 'Ragusa', 'Ravenna', 'Reggio Calabria',
        'Reggio Emilia', 'Rieti', 'Rimini', 'Roma', 'Rovigo', 'Salerno', 'Sassari',
        'Savona', 'Siena', 'Siracusa', 'Sondrio', 'Taranto', 'Teramo', 'Terni',
        'Torino', 'Trapani', 'Trento', 'Treviso', 'Trieste', 'Udine', 'Varese',
        'Venezia', 'Verbano-Cusio-Ossola', 'Vercelli', 'Verona', 'Vibo Valentia',
        'Vicenza', 'Viterbo',
        ];
        return $province;
    }
}
