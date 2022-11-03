<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    use HasFactory;

    protected $table = "serviciosestetica";
    protected $primaryKey = "id_ServicioEstetica";
    public $timestamps = false;

    protected $fillable = [
        'Servicio',
        'id_PaqueteEstetica',

    ];

    public function estetica()
    {
        return $this->belongsTo(PaquetesEstetica::class,'id_PaqueteEstetica');
    }

}
