<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PvLine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'p_v_id',
    ];

    public function pv(): BelongsTo {
        return $this->belongsTo(PV::class);
    }
}
