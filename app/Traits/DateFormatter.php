<?php

namespace App\Traits;

use Carbon\Carbon;

trait DateFormatter {
    public function getDate() {
        return Carbon::parse($this->date)->translatedFormat('d F Y');
    }

    public function getMonthName() {
        return Carbon::parse($this->date)->format('F');
    }

    public function getYear() {
        return Carbon::parse($this->date)->format('Y');
    }

    public function getTime($time) {
        return Carbon::parse($time)->format('H:i');
    }
}