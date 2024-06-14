<?php

namespace App\Filament\Resources\PripremaResource\Pages;

use App\Filament\Resources\PripremaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPriprema extends EditRecord
{
    protected static string $resource = PripremaResource::class;

    protected function getRedirectUrl(): string
    {
       return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }


    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
