<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActionOf extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'name',
        'action_of_type_id',
        'description',
    ];


    function actionOfType() : BelongsTo {
        return $this->belongsTo(ActionOfType::class);
    }
}
