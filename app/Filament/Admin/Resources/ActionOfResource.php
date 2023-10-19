<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ActionOfResource\Pages;
use App\Filament\Admin\Resources\ActionOfResource\RelationManagers;
use App\Models\ActionOf;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActionOfResource extends Resource
{
    protected static ?string $model = ActionOf::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('date')
                    ->required(),
                TextInput::make('name')
                    ->required()
                    ->maxLength('255'),
                TextInput::make('description')
                    ->maxLength('255'),
                Select::make('action_of_type_id')
                    ->relationship('actionOfType', 'name')
                    ->required()
                    ->preload()
                    ->searchable()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('date')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('description')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('actionOfType.name')
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
            'index' => Pages\ListActionOfs::route('/'),
            'create' => Pages\CreateActionOf::route('/create'),
            'edit' => Pages\EditActionOf::route('/{record}/edit'),
        ];
    }    
}
