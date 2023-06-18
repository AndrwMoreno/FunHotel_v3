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
}
