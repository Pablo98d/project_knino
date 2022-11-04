<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneroKnino extends Model
{
    use HasFactory;

    protected $table = "generoknino";
    protected $primaryKey = "id_GeneroKnino";
    public $timestamps = false;


    protected $fillable = [
        'NombreGeneroKnino',
    ];


}
