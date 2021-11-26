<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamenModel extends Model
{
    use HasFactory;
    protected $table="examen";
    protected $primaryKey="id";
    protected $fillable=['tipo','estado'];
}
