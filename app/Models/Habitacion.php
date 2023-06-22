<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Habitacion extends Model
{
    use HasFactory;
    protected $table = "habitaciones";
    protected $primaryKey = 'id';
    protected $fillable = [
        'numeroHabitacion',
        'descripcion',
        'estado'
    ];
    public $timestamps = false;
    protected $guarded = [];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'idCategoria', 'id');
    }
}
