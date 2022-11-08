<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaquetesFestejo extends Model
{
    use HasFactory;

    protected $table = "paquetesfestejos";
    protected $primaryKey = "id_PaqueteFestejo";
    public $timestamps = false;
 
    protected $fillable = [
        'NombrePaquete',
        'id_TipoPastel',
        'CantidadGorritos',
        'Decoracion',
        'BoloCantidad',
        'EstanciaHoras',
        'CantidadHumanos',
        'KninosInvitados',
        'id_Capacidad',
        'Precio',
    ];
 
    public function tipo_pastel()
    {
        return $this->belongsTo(Pasteles::class,'id_TipoPastel');
    }
    // public function peso()
    // {
    //     return $this->belongsTo(Peso::class,'id_Peso');
    // }
    // public function pelaje()
    // {
    //     return $this->belongsTo(Pelaje::class,'id_Pelaje');
    // }
}
