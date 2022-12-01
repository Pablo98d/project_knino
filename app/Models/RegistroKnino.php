<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroKnino extends Model
{
    use HasFactory;

    protected $table = "registrokninos";
    protected $primaryKey = "id_Knino";
    public $timestamps = false;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'NombreKnino',
        'id_Humano',
        'id_Raza',
        'id_GeneroKnino',
        'id_EstatusKnino',
        'id_Peso',
        'id_Talla',
        'id_Pelaje',
        'Esterilizacion',
        'Edad',
        'Cumpleanos',
        'id_Energia',
        'id_Personalidad',
        'Notas',
        'CartillaVacunacion',
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

    public function humano()
    {
        return $this->belongsTo(User::class,'id_Humano');
    }

    public function raza()
    {
        return $this->belongsTo(Razas::class,'id_Raza');
    }

    public function generoKnino()
    {
        return $this->belongsTo(GeneroKnino::class,'id_GeneroKnino');
    }

    public function estatusKnino()
    {
        return $this->belongsTo(EstatusKnino::class,'id_EstatusKnino');
    }

    public function peso()
    {
        return $this->belongsTo(Peso::class,'id_Peso');
    }

    public function talla()
    {
        return $this->belongsTo(Tallas::class,'id_Talla');
    }

    public function pelaje()
    {
        return $this->belongsTo(Pelaje::class,'id_Pelaje');
    }

    public function nivelEnergia()
    {
        return $this->belongsTo(NivelEnergia::class,'id_Energia');
    }

    public function personalidad()
    {
        return $this->belongsTo(Personalidad::class,'id_Personalidad');
    }
}
