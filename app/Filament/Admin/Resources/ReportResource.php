<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ReportResource\Pages;
use App\Models\Report;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ReportResource extends Resource
{
    protected static ?string $model = Report::class;

    protected static ?string $navigationIcon = 'heroicon-m-document-text';
    protected static ?string $modelLabel = "Rapport";
    protected static ?string $pluralModelLabel = "Rapports";
    protected static ?string $navigationGroup = "Rapports";

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
                Section::make('Type de Rapport')
                    ->schema([
                        Toggle::make('is_pv')
                            ->default(false)
                            ->label('pv'),
                        Toggle::make('is_mission')
                            ->default(false)
                            ->label('mission'),
                        Toggle::make('is_activity')
                            ->label('activité')
                            ->default(false),
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
                IconColumn::make('is_pv')
                    ->label('pv')
                    ->boolean(),
                IconColumn::make('is_activity')
                    ->label('activité')
                    ->boolean(),
                IconColumn::make('is_mission')
                    ->label('mission')
                    ->boolean(),
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
            'index' => Pages\ListReports::route('/'),
            'create' => Pages\CreateReport::route('/create'),
            'edit' => Pages\EditReport::route('/{record}/edit'),
        ];
    }    
}
