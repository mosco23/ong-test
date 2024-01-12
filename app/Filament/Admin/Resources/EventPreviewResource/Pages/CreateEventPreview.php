<?php

namespace App\Filament\Admin\Resources\EventPreviewResource\Pages;

use App\Filament\Admin\Resources\EventPreviewResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEventPreview extends CreateRecord
{
    protected static string $resource = EventPreviewResource::class;
}
