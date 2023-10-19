<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\OddResource\Pages;
use App\Models\Odd;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Support\Facades\FilamentIcon;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OddResource extends Resource
{
    protected static ?string $model = Odd::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    TextInput::make('name')
                        ->maxLength(255)
                        ->required(),
                    TextInput::make('description')
                        ->maxLength(255)
                        ->required(),
                    FileUpload::make('icon')
                        ->image()
                        ->required(),
                ])
                
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
            'index' => Pages\ListOdds::route('/'),
            'create' => Pages\CreateOdd::route('/create'),
            'edit' => Pages\EditOdd::route('/{record}/edit'),
        ];
    }    
}
