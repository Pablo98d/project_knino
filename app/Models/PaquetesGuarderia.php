<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaquetesGuarderia extends Model
{
    use HasFactory;


    protected $table = "paquetesguarderia";
    protected $primaryKey = "id_PaqueteGuarderia";
    public $timestamps = false;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'NombrePaquete',
        'CantidadDias',
        'MesesVigencia',
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
}
