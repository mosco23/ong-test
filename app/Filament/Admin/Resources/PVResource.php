<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PVResource\Pages;
use App\Filament\Admin\Resources\PVResource\RelationManagers;
use App\Models\PV;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PVResource extends Resource
{
    protected static ?string $model = PV::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('name')
                            ->maxLength(255)
                            ->required(),
                        DatePicker::make('date')
                            ->required(),
                    ]),
                Section::make('PDF')
                    ->schema([
                        FileUpload::make('url')
                            ->required()
                            ->directory('pdf'),
                    ]),
                Repeater::make('agenda_id')
                    ->relationship('agendas')
                    ->simple(
                        TextInput::make('name')
                    )

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('date')
                    ->date('d F Y')
                    ->sortable()
                    ->searchable()
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
            'index' => Pages\ListPVS::route('/'),
            'create' => Pages\CreatePV::route('/create'),
            'edit' => Pages\EditPV::route('/{record}/edit'),
        ];
    }    
}
