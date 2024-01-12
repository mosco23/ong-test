<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PageResource\Pages;
use App\Filament\Admin\Resources\PageResource\RelationManagers\SectionsRelationManager;
use App\Models\Page;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationGroup = "Gestion des pages";
    protected static ?string $navigationIcon = 'heroicon-o-document';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Select::make('template_id')
                        ->relationship('template', 'name')
                        ->preload()
                        ->searchable()
                        ->label('Template'),
                    TextInput::make('slug')
                        // ->required()
                        ->maxLength(255)
                        ->label('Lien'),
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255)
                        ->label('Nom'),
                    TextInput::make('title')
                        ->required()
                        ->maxLength(255)
                        ->label('Titre'),
                    TextInput::make('description'),
                    Repeater::make('sections')
                        ->relationship('pageSections')
                        ->label('Sections de page')
                        ->schema([
                            Select::make('section_id')
                                ->relationship('section', 'name')
                                ->preload()
                                ->searchable()
                                ->label('Nom')
                                ->createOptionForm([
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
                                    ]),
                            Toggle::make('active')
                                ->label('est actif')
                        ])
                        ->defaultItems(0)
                        ->orderColumn('rang')
                        ->reorderableWithButtons()
            
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->searchable()
                    ->label('Nom'),
                TextColumn::make('title')
                    ->sortable()
                    ->searchable()
                    ->label('Titre'),
                TextColumn::make('slug')
                    ->sortable()
                    ->searchable()
                    ->label('Lien'),
                TextColumn::make('template.name')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            SectionsRelationManager::class
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }    
}
