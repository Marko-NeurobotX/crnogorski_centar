<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use App\Filament\Resources\GalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;


class CreateGallery extends CreateRecord
{
    protected static string $resource = GalleryResource::class;
    protected function getRedirectUrl(): string
    {
       return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }

    protected function handleRecordCreation(array $data): Model
    {
        $model = null;
        foreach ($data['attachments'] as $attachment) {
            $model = static::getModel()::create([
                'attachment' => $attachment
            ]);
        }

        return $model;
    }
}
