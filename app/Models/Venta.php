<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Servicio;

class Venta extends Model
{
    use HasFactory;
    protected $table = "ventas";
    protected $primaryKey = 'id';
    protected $fillable = ['fecha_venta', 'estado'];
    protected $guarded = [];
    public $timestamps = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->estado = 'activo'; // Establecer el valor predeterminado del estado
        });
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'idServicio', 'id');
    }

    const Activo = 1;
    const Inactivo = 0;

    public function getEstadoTextoAttribute()
    {
        switch ($this->estado) {
            case Venta::Activo:
                return 'Activo';
            case Venta::Inactivo:
                return 'Inactivo';
            default:
                return 'Desconocido';
        }
    }

    public static function getEstadoValue($estado)
    {
        switch ($estado) {
            case 'Activo':
                return 1;
            case 'Inactivo':
                return 0;
            default:
                return 69; // Valor por defecto si el estado no coincide con ninguno de los valores anteriores
        }
    }
}
