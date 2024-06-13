<?php

namespace App\Filament\Resources\ClientsResource\Pages;

use App\Filament\Resources\ClientsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateClients extends CreateRecord
{
    protected function getRedirectUrl(): string
    {
       return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }    protected static string $resource = ClientsResource::class;
}
