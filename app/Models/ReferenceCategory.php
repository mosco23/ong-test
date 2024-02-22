<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ReferenceCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    function references(): HasMany {
        return $this->hasMany(Reference::class);
    }
}
