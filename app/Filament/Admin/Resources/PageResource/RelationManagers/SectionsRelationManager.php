<?php

namespace App\Filament\Admin\Resources\PageResource\RelationManagers;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class SectionsRelationManager extends RelationManager
{
    protected static string $relationship = 'sections';

    protected static ?string $recordTitleAttribute = 'name';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('vue')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('title')
                        ->maxLength(255),
                    TextInput::make('subtitle'),
                    FileUpload::make('img')
                        ->image()
                        ->preserveFilenames(),
                    
                ])->columns(2),
                Section::make([
                    RichEditor::make('description'),
                ]),
                Repeater::make('items')
                    ->relationship('items')
                    ->schema([
                        TextInput::make('title'),
                        TextInput::make('description'),
                        FileUpload::make('image')
                            ->image()
                    ])->columns(2)
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
                Tables\Actions\AttachAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DetachAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DetachBulkAction::make(),
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }    
}
