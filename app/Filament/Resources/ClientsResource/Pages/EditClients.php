<?php

namespace App\Filament\Resources\ClientsResource\Pages;

use App\Filament\Resources\ClientsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClients extends EditRecord
{
    protected function getRedirectUrl(): string
    {
       return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
    protected static string $resource = ClientsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
