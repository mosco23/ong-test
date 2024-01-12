<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SubNavitemResource\Pages;
use App\Filament\Admin\Resources\SubNavitemResource\RelationManagers;
use App\Models\Navitem;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubNavitemResource extends Resource
{
    protected static ?string $model = Navitem::class;

    protected static ?string $modelLabel = "Menu choisi";
    protected static ?string $pluralLabel = "Ordonner menus";
    protected static ?string $navigationGroup = "Navigation du site";
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Select::make('navitem_id')
                        ->label("Parent")
                        ->relationship('navitem', 'name')
                        ->preload()
                        ->searchable(),
                    TextInput::make("name")
                        ->maxLength(255)
                        ->required(),
                    TextInput::make('link')
                        ->maxLength(255)
                        ->required()
                        ->disabled(function($state){
                            if(auth()->user()->isDev()){
                                return false;
                            }
                            return $state != null;
                        }),
                ]),
                Section::make([
                    Repeater::make('items')
                    ->relationship()
                    ->schema([
                        TextInput::make("name")
                            ->required()
                            ->maxLength(255),
                        TextInput::make('link')
                            ->required()
                            ->maxLength(255),
                    ])
                    ->orderColumn(),
                ])
            ]);
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
            'index' => Pages\ListSubNavitems::route('/'),
            'create' => Pages\CreateSubNavitem::route('/create'),
            'edit' => Pages\EditSubNavitem::route('/{record}/edit'),
        ];
    }  
    
    public static function getEloquentQuery(): Builder
    {
        $query = static::getModel()::query()->has('items');

        if ($tenant = Filament::getTenant()) {
            static::scopeEloquentQueryToTenant($query, $tenant);
        }

        return $query;
    }
}
