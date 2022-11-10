<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peso extends Model
{
    use HasFactory;

    protected $table = "peso";
    protected $primaryKey = "id_Peso";
    public $timestamps = false;

    protected $fillable = [
        'RangoPeso',
    ];
}
