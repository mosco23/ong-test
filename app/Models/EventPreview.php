<?php

namespace App\Models;

use Carbon\Carbon;
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
        if($this->start_at && $this->end_at){
            $text = "du ".$this->parseDate($this->start_at)." au ".$this->end_at." ".$this->name;
        }

        if($this->start_at){
            $text = $this->parseDate($this->start_at).",  ".$this->name;
        }

        if(!$text){
            $text = $this->name;
        }

        if($this->location){
            $text = "$text. Lieu : $this->location";
        }

        return $text;
    }

    function parseDate($date) {
        return Carbon::parse($date)->translatedFormat('d/m/Y');
    }
}
