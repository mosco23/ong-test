<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\EventPreviewResource\Pages;
use App\Filament\Admin\Resources\EventPreviewResource\RelationManagers;
use App\Models\EventPreview;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Set;
use Illuminate\Support\Str;

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
                        DateTimePicker::make('start_at')
                            ->required()
                            ->label('Date de Debut')
                            ->seconds(false)
                            ->displayFormat('d/m/Y')
                            ->timezone('Africa/Abidjan'),
                        DateTimePicker::make('end_at')
                            ->required()
                            ->label("Date de Fin")
                            ->seconds(false)
                            ->displayFormat('d/m/Y')
                            ->timezone('Africa/Abidjan')
                            ->live()
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('stop_at', $state)),
                        DateTimePicker::make('stop_at')
                            ->label("Fin d'affichage")
                            ->seconds(false)
                            ->displayFormat('d/m/Y')
                            ->timezone('Africa/Abidjan'),
                            // ->default(fn(Get $get) => $get('end_at')),
                    ])
                    ->columns(3),

                Section::make("Informations")
                    ->schema([
                        TextInput::make('name')
                            ->label('Nom')
                            ->required(),
                        TextInput::make('location')
                            ->label('Adresse'),
                    ])
                    ->columns(2),
                Textarea::make('description')
                    ->cols(20)
                    ->rows(5),
                Toggle::make('active')
                    ->label('Activer'),
                
                
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('start_at')
                    ->searchable()
                    ->sortable()
                    ->dateTime(),
                TextColumn::make('end_at')
                    ->searchable()
                    ->sortable()
                    ->dateTime(),
                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->words(5),
                TextColumn::make('description')
                    ->searchable()
                    ->sortable()
                    ->words(5),
                TextColumn::make('location')
                    ->searchable()
                    ->sortable()
                    ->words(3),
                // TextColumn::make('img')->searchable()->sortable(),
                TextColumn::make('stop_at')
                    ->searchable()
                    ->sortable()
                    ->dateTime(),
                IconColumn::make('active')
                    ->boolean()
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
