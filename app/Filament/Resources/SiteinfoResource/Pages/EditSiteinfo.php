<?php

namespace App\Filament\Resources\SiteinfoResource\Pages;

use App\Filament\Resources\SiteinfoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSiteinfo extends EditRecord
{
    protected static string $resource = SiteinfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
