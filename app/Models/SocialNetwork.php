<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SocialNetwork extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'name',
        'link',
    ];

    function site(): BelongsTo {
        return $this->belongsTo(Site::class);
    }
}
