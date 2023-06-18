<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table = 'reservas';
    protected $primarykey = 'id';
    protected $fillable = ['idHabitacion', 'idServicio', 'idCliente', 'estado'];
    protected $guarded = [];
    public $timestamps=false;
}