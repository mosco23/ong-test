<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProgActivityResource\Pages;
use App\Filament\Admin\Resources\ProgActivityResource\RelationManagers;
use App\Models\ProgActivity;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
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

class ProgActivityResource extends Resource
{
    protected static ?string $model = ProgActivity::class;

    protected static ?string $navigationIcon = 'heroicon-m-document-text';
    protected static ?string $modelLabel = "Programme d'activité";
    protected static ?string $pluralModelLabel = "Programmes d'activité";
    protected static ?string $navigationGroup = "Nos activités";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Select::make('group_prog_activity_id')
                            ->relationship('groupProgActivity', 'title')
                            ->preload()
                            ->searchable()
                            ->required()
                            ->createOptionForm([
                                TextInput::make('title')
                                    ->required()
                                    ->maxLength(255)
                            ]),
                        RichEditor::make('name')
                            ->required()
                            ->label("Nom"),
                        TextInput::make('completion_time')
                            ->required()
                            ->maxLength('255')
                            ->label("Nombre de mois"),
                        TextInput::make('due_date')
                            ->required()
                            ->maxLength('255')
                            ->label("Periode"),
                        RichEditor::make('place')
                            ->maxLength('255')
                            ->label("Lieu"),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('groupProgActivity.title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label("Nom")
                    ->words(5)
                    ->html(),
                TextColumn::make('completion_time')
                    ->searchable()
                    ->sortable()
                    ->label("Nombre de mois"),
                TextColumn::make('due_date')
                    ->searchable()
                    ->sortable()
                    ->label("Periode"),
                // TextColumn::make('place')
                //     ->searchable()
                //     ->sortable()
                //     ->label("Lieu")
                //     ->html()
                //     ->words(5),
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
