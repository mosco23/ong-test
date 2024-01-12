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

    protected static ?string $navigationGroup = "Navigation du site";
    protected static ?string $navigationIcon = 'heroicon-o-arrow-top-right-on-square';
    protected static ?string $modelLabel = "Menu / sous menu de navigation";
    protected static ?string $pluralModelLabel = "Menu / sous menus de navigation";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("name")
                    ->required()
                    ->maxLength(255)
                    ->label('Nom'),
                TextInput::make('link')
                    ->required()
                    ->maxLength(255)
                    ->label('Lien')
                    ->disabled(function($state){
                        if(auth()->user()->isDev()){
                            return false;
                        }
                        return $state != null;
                    }),
                Select::make('navbars')
                    ->relationship('navbars', 'name')
                    ->preload()
                    ->searchable()
                    ->multiple()
                    ->label('Barre de navigation'),
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
                    ->searchable()
                    ->label('Nom'),
                TextColumn::make('navitem.name')
                    ->label('Parent')
                    ->searchable(),
                TextColumn::make('link')
                    ->label('Lien'),
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
