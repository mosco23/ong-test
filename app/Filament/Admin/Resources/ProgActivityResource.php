<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProgActivityResource\Pages;
use App\Filament\Admin\Resources\ProgActivityResource\RelationManagers;
use App\Models\ProgActivity;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProgActivityResource extends Resource
{
    protected static ?string $model = ProgActivity::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('start_at')
                            ->required()
                            ->numeric()
                            ->minValue(2020),
                        TextInput::make('end_at')
                            ->required()
                            ->numeric()
                            ->minValue(2020),
                        RichEditor::make('name')
                            ->required(),
                        TextInput::make('completion_time')
                            ->required()
                            ->maxLength('255'),
                        TextInput::make('due_date')
                            ->required()
                            ->maxLength('255'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('start_at')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('end_at')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('completion_time')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('due_date')
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
            'index' => Pages\ListProgActivities::route('/'),
            'create' => Pages\CreateProgActivity::route('/create'),
            'edit' => Pages\EditProgActivity::route('/{record}/edit'),
        ];
    }    
}
