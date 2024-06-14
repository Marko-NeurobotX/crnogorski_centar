<?php

namespace App\Filament\Resources\PripremaResource\Pages;

use App\Filament\Resources\PripremaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPripremas extends ListRecords
{
    protected static string $resource = PripremaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
