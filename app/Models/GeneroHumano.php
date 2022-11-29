<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneroHumano extends Model
{
    use HasFactory;

    protected $table = "generohumano";
    protected $primaryKey = "id_GeneroHumano";
    public $timestamps = false;

    protected $fillable = [
        'NombreGeneroHumano',
    ];
}