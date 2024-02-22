<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reference extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'logo', 'reference_category_id'];

    function referenceCategory() : BelongsTo {
        return $this->belongsTo(ReferenceCategory::class);
    }
}
