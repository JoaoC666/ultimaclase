<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotasModel extends Model
{
    use HasFactory;
    protected $table="notas";
    protected $primaryKey="id";
    protected $fillable=['nota','estado'];
}
