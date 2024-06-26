<?php

namespace App\Filament\Resources\OglasResource\Pages;

use App\Filament\Resources\OglasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOglas extends EditRecord
{
    protected function getRedirectUrl(): string
    {
       return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
    protected static string $resource = OglasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
