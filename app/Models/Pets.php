<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    // Indicate the fields that will be managed by the model
    protected $fillable = ["name", "description"];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
