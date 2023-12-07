<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PartnerCategoryResource\Pages;
use App\Filament\Admin\Resources\PartnerCategoryResource\RelationManagers;
use App\Models\PartnerCategory;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PartnerCategoryResource extends Resource
{
    protected static ?string $model = PartnerCategory::class;

    protected static ?string $navigationGroup = "Nos partenaires";
    protected static ?string $navigationIcon = 'heroicon-o-hand-raised';
    protected static ?string $modelLabel = "Categorie de partenaire";
    protected static ?string $pluralModelLabel = "Categories de partenaire";


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
                    ->label('Nom'),
                // TextColumn::make('partners_count')
                    // ->count()
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
            'index' => Pages\ListPartnerCategories::route('/'),
            'create' => Pages\CreatePartnerCategory::route('/create'),
            'edit' => Pages\EditPartnerCategory::route('/{record}/edit'),
        ];
    }    
}
