<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Servicio;

class Catalogo extends Model
{
    use HasFactory;
    protected $table = 'catalogos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'descripcion',
    ];
    public $timestamps = false;
    protected $guarded = [];

    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'idServicio', 'id');
    }
}
