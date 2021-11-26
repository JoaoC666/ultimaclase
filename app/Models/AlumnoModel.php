<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumnoModel extends Model
{
    use HasFactory;
    protected $table="alumno";
    protected $primaryKey="id";
    protected $fillable=['nombre','materia','curso','estado'];
}
