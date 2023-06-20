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

    
}
