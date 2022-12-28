<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    # définir les champs de la bd à remplir
    protected $fillable = ['name', 'phone', 'locality', 'age'];

    // protected $guarded = ['id'];
}
