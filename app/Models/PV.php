<?php

namespace App\Models;

use App\Traits\DateFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PV extends Model
{
    use HasFactory, DateFormatter;

    protected $fillable = ['name', 'date', 'url'];

    function agendas() : HasMany {
        return $this->hasMany(Agenda::class);
    }
}
