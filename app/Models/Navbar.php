<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Navbar extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];


    function navitems() : BelongsToMany {
        return $this->belongsToMany(Navitem::class);
    }
}
