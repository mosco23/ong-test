<?php

namespace App\Filament\Admin\Resources\ReportResource\Forms;

use App\Models\Report;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

abstract class ReportFormResource extends Resource
{
    protected static ?string $model = Report::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('name')
                            ->maxLength(255)
                            ->required()
                            ->label('Nom'),
                        RichEditor::make('description')
                            ->label('Description'),
                        DatePicker::make('date')
                            ->required(),
                    ]),
                Section::make('PDF')
                    ->schema([
                        FileUpload::make('url')
                            ->required()
                            ->label('Fichier')
                            ->directory('pdf'),
                    ]),
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
                TextColumn::make('description')
                    ->sortable()
                    ->searchable()
                    ->label('Description')
                    ->words(10)
                    ->html(),
                TextColumn::make('date')
                    ->date('d F Y')
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
}
