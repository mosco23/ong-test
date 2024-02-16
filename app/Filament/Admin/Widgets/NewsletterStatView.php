<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Newsletter;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class NewsletterStatView extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Newsletters', Newsletter::count())
        ];
    }
}
