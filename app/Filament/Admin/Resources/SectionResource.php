<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SectionResource\Pages;
use App\Models\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section as ComponentsSection;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SectionResource extends Resource
{
    protected static ?string $model = Section::class;

    protected static ?string $navigationGroup = "Gestion des pages";
    protected static ?string $navigationIcon = 'heroicon-o-chevron-up-down';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                ComponentsSection::make([
                    Select::make('page_id')
                        ->relationship('pages', 'name')
                        ->multiple()
                        ->preload()
                        ->searchable(),
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('vue')
                        ->required()
                        ->maxLength(255)
                        ->disabled(function($state){
                            if(auth()->user()->isDev()){
                                return false;
                            }
                            return $state != null;
                        }),
                    TextInput::make('title')
                        ->maxLength(255),
                    TextInput::make('subtitle'),
                ])->columns(2),
                ComponentsSection::make([
                    FileUpload::make('img')
                        ->image()
                        ->imageEditor(),
                    RichEditor::make('description'),
                ])->columns(1),
                Repeater::make('items')
                    ->relationship('items')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        Textarea::make('decription')
                            ->rows(10)
                            ->cols(30),
                        FileUpload::make('image')
                            ->image()
                            ->imageEditor()
                    ])
                    ->columns(2)
                    ->defaultItems(0)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('subtitle')
                    ->searchable()
                    ->sortable(),
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
