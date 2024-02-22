<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ReferenceResource\Pages;
use App\Models\Reference;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ReferenceResource extends Resource
{
    protected static ?string $model = Reference::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = "Nos references";

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->label('Nom'),
            FileUpload::make('logo')
                ->required()
                ->image()
                ->imageEditor(),
            Select::make('reference_category_id')
                ->relationship('referenceCategory', 'name')
                ->preload()
                ->searchable()
                ->label('Categorie')
                ->createOptionForm([
                    TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Nom')
                ])
        ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nom'),
                ImageColumn::make('logo'),
                TextColumn::make('referenceCategory.name')
                    ->label('Categorie')
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
            'index' => Pages\ListReferences::route('/'),
            'create' => Pages\CreateReference::route('/create'),
            'edit' => Pages\EditReference::route('/{record}/edit'),
        ];
    }    
}
