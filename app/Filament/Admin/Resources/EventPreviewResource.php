<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\EventPreviewResource\Pages;
use App\Filament\Admin\Resources\EventPreviewResource\RelationManagers;
use App\Models\EventPreview;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventPreviewResource extends Resource
{
    protected static ?string $model = EventPreview::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = "Evenement prevu";
    protected static ?string $pluralModelLabel = "Evenements prevus";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make("Periode")
                    ->schema([
                        DatePicker::make('day')
                            ->required(),
                        TimePicker::make('start_at')
                            ->required()
                            ->label('Heure Debut'),
                        TimePicker::make('end_at')
                            ->required()
                            ->label("Heure Fin"),
                        TextInput::make('location')
                            ->label('Adresse'),
                        Toggle::make('active'),
                    ])
                    ->columns(2),
                Textarea::make('description')
                    ->cols(20)
                    ->rows(5),
                
                
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('day')->searchable()->sortable(),
                TextColumn::make('day')->searchable()->sortable(),
                TextColumn::make('day')->searchable()->sortable(),
                IconColumn::make('active')
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
            'index' => Pages\ListEventPreviews::route('/'),
            'create' => Pages\CreateEventPreview::route('/create'),
            'edit' => Pages\EditEventPreview::route('/{record}/edit'),
        ];
    }    
}
