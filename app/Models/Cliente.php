<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = "clientes";
    protected $primaryKey = "id";
    protected $fillable = [
        'primerNombre',
        'segundoNombre',
        'primerApellido',
        'segundoApellido',
        'tipoDocumento',
        'numeroDocumento',
        'celular',
        'correo'
    ];
    protected $guarded = [];
    public $timestamps = false;
    
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->estado = 'Activo';
        });
    }
}
