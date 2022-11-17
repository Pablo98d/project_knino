<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasteles extends Model
{
    use HasFactory;

    protected $table = "tipopastel";
    protected $primaryKey = "id_TipoPastel";
    public $timestamps = false;

    protected $fillable = [
        'NombrePastel',
    ];
}
