<?php

namespace App\Filament\Resources\PripremaResource\Pages;

use App\Filament\Resources\PripremaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePriprema extends CreateRecord
{
    protected static string $resource = PripremaResource::class;

    protected function getRedirectUrl(): string
    {
       return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }

}
