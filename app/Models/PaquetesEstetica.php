<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaquetesEstetica extends Model
{
    use HasFactory;

    protected $table = "paquetesestetica";
    protected $primaryKey = "id_PaqueteEstetica";
    public $timestamps = false;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Servicio',
        'id_Talla',
        'id_Peso',
        'id_Pelaje',
        'id_Capacidad',
        'Precio',
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

    public function talla()
    {
        return $this->belongsTo(Tallas::class,'id_Talla');
    }
    public function peso()
    {
        return $this->belongsTo(Peso::class,'id_Peso');
    }
    public function pelaje()
    {
        return $this->belongsTo(Pelaje::class,'id_Pelaje');
    }
}
