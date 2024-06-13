<?php

namespace App\Filament\Resources\LicenceResource\Pages;

use App\Filament\Resources\LicenceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLicence extends EditRecord
{
    protected function getRedirectUrl(): string
    {
       return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
    protected static string $resource = LicenceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
