<?php

namespace App\Filament\Resources\SiteinfoResource\Pages;

use App\Filament\Resources\SiteinfoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSiteinfos extends ListRecords
{
    protected static string $resource = SiteinfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
