<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ReferenceCategoryResource\Pages;
use App\Models\ReferenceCategory;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ReferenceCategoryResource extends Resource
{
    protected static ?string $model = ReferenceCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = "Categorie de reference";
    protected static ?string $pluralModelLabel = "Categories de reference";
    protected static ?string $navigationGroup = "Nos references";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Nom')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nom')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListReferenceCategories::route('/'),
            'create' => Pages\CreateReferenceCategory::route('/create'),
            'edit' => Pages\EditReferenceCategory::route('/{record}/edit'),
        ];
    }    
}
