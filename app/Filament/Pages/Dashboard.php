<?php
 
namespace App\Filament\Pages;

use App\Filament\Admin\Widgets\NewsletterStatView;
use App\Filament\Admin\Widgets\VisitStatView;

class Dashboard extends \Filament\Pages\Dashboard
{
    /**
     * @return array<class-string<Widget> | WidgetConfiguration>
     */
    public function getWidgets(): array
    {
        return[
            VisitStatView::make(),
            NewsletterStatView::make()
        ];
    }
}