<?php

namespace App\Filament\Resources\OglasResource\Pages;

use App\Filament\Resources\OglasResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOglas extends CreateRecord
{
    protected static string $resource = OglasResource::class;

    protected function getRedirectUrl(): string
    {
       return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}
