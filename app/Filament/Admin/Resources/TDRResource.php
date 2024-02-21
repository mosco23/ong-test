<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TDRResource\Pages;
use App\Filament\Admin\Resources\TDRResource\RelationManagers;
use App\Models\TDR;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TDRResource extends Resource
{
    protected static ?string $model = TDR::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    // protected static ?string $modelLabel = "TDR";
    // protected static ?string $pluralModelLabel = "TDRs";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Titre')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                    ->maxLength(255)
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label("Titre")
                    ->sortable()
                    ->searchable(),
                TextColumn::make('description')
                    ->sortable()
                    ->searchable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ReplicateAction::make(),
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
            'index' => Pages\ListTDRS::route('/'),
            'create' => Pages\CreateTDR::route('/create'),
            'edit' => Pages\EditTDR::route('/{record}/edit'),
        ];
    }    
}
