<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    use HasFactory;
    protected $table = 'checkins';
    protected $primarykey = 'id';
    protected $fillable = ['fecIngreso', 'idReserva'];
    protected $guarded = [];
    public $timestamps=false;
}
