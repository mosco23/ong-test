<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SiteContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact',
        'site_id'
    ];

    function site(): BelongsTo {
        return $this->belongsTo(Site::class);
    }
}
