<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SecondaryActivityResource\Pages;
use App\Filament\Admin\Resources\SecondaryActivityResource\RelationManagers;
use App\Models\SecondaryActivity;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SecondaryActivityResource extends Resource
{
    protected static ?string $model = SecondaryActivity::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = "Activité secondaire";
    protected static ?string $pluralModelLabel = "Activités secondaires";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
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
            'index' => Pages\ListSecondaryActivities::route('/'),
            'create' => Pages\CreateSecondaryActivity::route('/create'),
            'edit' => Pages\EditSecondaryActivity::route('/{record}/edit'),
        ];
    }    
}
