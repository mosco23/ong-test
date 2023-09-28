<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SectionResource\Pages;
use App\Models\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section as ComponentsSection;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SectionResource extends Resource
{
    protected static ?string $model = Section::class;

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                ComponentsSection::make([
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('vue')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('title')
                        ->maxLength(255),
                    TextInput::make('subtitle'),
                    Textarea::make('description'),
                    FileUpload::make('img')
                        ->image(),
                ])->columns(2),
                Repeater::make('items')
                    ->relationship('items')
                    ->schema([
                        TextInput::make('title'),
                        TextInput::make('description'),
                        FileUpload::make('image')
                            ->image()
                    ])
                    ->columns(2)
                    ->defaultItems(0)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListSections::route('/'),
            'create' => Pages\CreateSection::route('/create'),
            'edit' => Pages\EditSection::route('/{record}/edit'),
        ];
    }    
}
