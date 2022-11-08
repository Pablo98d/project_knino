<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroHumano extends Model
{
    use HasFactory;


    protected $table = "registrohumanos";
    protected $primaryKey = "id_Humano";
    public $timestamps = false;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
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
 
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // protected $hidden = [
    //     'password',
    //     // 'remember_token',
    // ];
 
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        // 'email_verified_at' => 'datetime',
    ];
}
