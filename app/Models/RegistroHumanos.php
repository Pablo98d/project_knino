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
        'NombreHumano',
        'Apellidos',
        'Contrasena',
        'id_GeneroHumano',
        'Calle',
        'NumeroExterior',
        'NumeroInterior',
        'CodigoPostal',
        'Colonia',
        'id_Estado',
        'Municipio',
        'Celular',
        'Email',
        'InstagramUser',
        'TikTokUser',
        'NombreEmergencia',
        'TelefonoEmergencia',
    ];


}
