<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProgActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'completion_time',
        'due_date',
        'place',
        'group_prog_activity_id',
    ];


    function groupProgActivity(): BelongsTo {
        return $this->belongsTo(GroupProgActivity::class);
    }
    
}
