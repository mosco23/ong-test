<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ActivityResource\Pages;
use App\Models\Activity;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ActivityResource extends Resource
{
    protected static ?string $model = Activity::class;
    protected static ?string $modelLabel = "activité";
    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Activite')
                    ->schema([
                        DatePicker::make('date')
                            ->required(),
                        TimePicker::make('start_at')
                            ->seconds(false)
                            ->label('Heure début'),
                        TimePicker::make('end_at')
                            ->seconds(false)
                            ->label('Heure fin'),
                        TextInput::make('name')
                            ->required()
                            ->label('Nom'),

                    ]),
                Section::make('Activite')
                    ->schema([
                        Repeater::make('images')
                            ->relationship()
                            ->simple(
                                FileUpload::make('url')
                                    ->image()
                                    ->imageEditor()
                                    ->required()
                            )
                            ->orderColumn('sort')
                    ]),
               
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('date')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('start_at')
                    ->searchable()
                    ->sortable()
                    ->label('Heure début'),
                TextColumn::make('end_at')
                    ->searchable()
                    ->sortable()
                    ->label('Heure fin'),
                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Nom'),

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
            'index' => Pages\ListActivities::route('/'),
            'create' => Pages\CreateActivity::route('/create'),
            'edit' => Pages\EditActivity::route('/{record}/edit'),
        ];
    }    
}
