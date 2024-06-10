<?php

namespace App\Filament\Resources\OglasResource\Pages;

use App\Filament\Resources\OglasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOglas extends ListRecords
{
    protected static string $resource = OglasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
