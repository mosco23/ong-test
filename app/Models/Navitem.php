<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Navitem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link',
        'navitem_id',
    ];


    function navbars() : BelongsToMany {
        return $this->belongsToMany(Navbar::class);
    }


    function navitem() : BelongsTo {
        return $this->belongsTo(static::class);
    }

    function items(): HasMany {
        return $this->hasMany(static::class);
    }
}
