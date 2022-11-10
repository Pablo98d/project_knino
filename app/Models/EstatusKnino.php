<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstatusKnino extends Model
{
    use HasFactory;

    protected $table = "estatusknino";
    protected $primaryKey = "id_EstatusKnino";
    public $timestamps = false;

    protected $fillable = [
        'EstatusKnino',
    ];
}
