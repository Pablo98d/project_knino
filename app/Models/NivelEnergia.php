<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NivelEnergia extends Model
{
    use HasFactory;

    protected $table = "nivelenergia";
    protected $primaryKey = "id_Energia";
    public $timestamps = false;


    protected $fillable = [
        'Nivel',
    ];


}
