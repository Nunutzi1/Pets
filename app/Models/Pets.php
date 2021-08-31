<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    // Indicar los campos que seran administrados por el modelo
    protected $fillable = ["name", "description"];
}
