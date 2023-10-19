<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\NavitemResource\Pages;
use App\Filament\Admin\Resources\NavitemResource\RelationManagers;
use App\Models\Navitem;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NavitemResource extends Resource
{
    protected static ?string $model = Navitem::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("name")
                    ->required()
                    ->maxLength(255),
                TextInput::make('link')
                    ->required()
                    ->maxLength(255),
                Select::make('navbars')
                    ->relationship('navbars', 'name')
                    ->preload()
                    ->searchable()
                    ->multiple(),
                Select::make('navitem_id')
                    ->label("Parent")
                    ->relationship('navitem', 'name')
                    ->preload()
                    ->searchable(),
            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('navitem.name')
                    ->label('Parent')
                    ->searchable(),
                TextColumn::make('link'),
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
            'index' => Pages\ListNavitems::route('/'),
            'create' => Pages\CreateNavitem::route('/create'),
            'edit' => Pages\EditNavitem::route('/{record}/edit'),
        ];
    }    
}
