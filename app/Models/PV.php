<?php

namespace App\Models;

use App\Traits\DateFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PV extends Model
{
    use HasFactory, DateFormatter;

    protected $table = 'p_v_s';

    protected $fillable = ['name', 'date', 'url'];

    function lines() : HasMany {
        return $this->hasMany(PvLine::class);
    }
}
