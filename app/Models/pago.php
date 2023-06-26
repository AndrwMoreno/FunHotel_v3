<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pago extends Model
{
    use HasFactory;
    protected $table = 'metodo_pagos';
    protected $primarykey = 'id';
    protected $fillable = ['nombre'];
    protected $guarded = [];
    public $timestamps=false;
    use HasFactory;
}
