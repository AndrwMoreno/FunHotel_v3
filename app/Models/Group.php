<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\User;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * The users that belong to the group.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    const Activo = 1;
    const Inactivo = 0;

    public function getEstadoTextoAttribute()
    {
        switch ($this->estado) {
            case Group::Activo:
                return 'Activo';
            case Group::Inactivo:
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
