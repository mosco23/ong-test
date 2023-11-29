<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrgChart extends Model
{
    use HasFactory;

    protected $fillable = [
        'pid',
        'title',
        'img',
        'user_id',
        'rank',
    ];

    function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
