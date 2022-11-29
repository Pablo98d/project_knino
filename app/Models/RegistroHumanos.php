<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroHumanos extends Model
{
    use HasFactory;

    protected $table = "registrohumanos";
    protected $primaryKey = "id_Humano";
    public $timestamps = false;


    protected $fillable = [
        'id_GeneroHumano',
        'Calle',
        'NumeroExterior',
        'NumeroInterior',
        'CodigoPostal',
        'Colonia',
        'id_Estado',
        'Municipio',
        'Celular',
        'InstagramUser',
        'TikTokUser',
        'NombreEmergencia',
        'TelefonoEmergencia',
    ];

    public function generoHumano()
    {
        return $this->belongsTo(GeneroHumano::class, 'id_GeneroHumano');
    }

    public function nombreEstado()
    {
        return $this->belongsTo(Estado::class, 'id_Estado');
    }
}
