<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPreview extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_at',
        'end_at',
        'name',
        'description',
        'location',
        'img',
        'active',
        'stop_at'
    ];

    function toText() : string {
        $text = '';
        if($this->date && $this->start_at && $this->end_at){
            $text = "$this->date de $this->start_at a $this->end_at $this->name";
        }

        if($this->date && $this->start_at){
            $text = "$this->date a $this->start_at $this->name";
        }

        if($this->date){
            $text = "$this->date, $this->name";
        }

        if(!$text){
            $text = $this->name;
        }

        if($this->location){
            $text = "$text. Lieu : $this->location";
        }

        return $text;
    }
}
