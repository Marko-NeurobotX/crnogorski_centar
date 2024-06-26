<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PripremaResource\Pages;
use App\Filament\Resources\PripremaResource\RelationManagers;
use App\Models\Priprema;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PripremaResource extends Resource
{
    protected static ?string $model = Priprema::class;

    protected static ?string $navigationIcon = 'heroicon-o-ellipsis-horizontal';

    protected static ?string $modelLabel = 'Program u pripremi';

    protected static ?string $pluralModelLabel = 'Programi u pripremi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\FileUpload::make('attachment')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPripremas::route('/'),
            'create' => Pages\CreatePriprema::route('/create'),
            'edit' => Pages\EditPriprema::route('/{record}/edit'),
        ];
    }
}
