<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $table = "municipio";
    protected $primaryKey = "id_Municipio";
    public $timestamps = false;

    protected $fillable = [
        'id_Estado',
        'NombreMunicipio',
    ];

    public function estadoNombre()
    {
        return $this->belongsTo(EstadosPru::class, 'id_Estado');
    }
}