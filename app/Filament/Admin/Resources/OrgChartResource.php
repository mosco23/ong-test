<?php

namespace App\Filament\Admin\Resources;

use Filament\Forms\Set;
use App\Filament\Admin\Resources\OrgChartResource\Pages;
use App\Filament\Admin\Resources\OrgChartResource\RelationManagers;
use App\Models\OrgChart;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class OrgChartResource extends Resource
{
    protected static ?string $model = OrgChart::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make("pid")
                            ->label('Rang')
                            ->required()
                            ->numeric()
                            ->integer()
                            ->minValue(0),
                        TextInput::make("rank")
                            ->label('Position')
                            ->required()
                            ->numeric()
                            ->integer()
                            ->minValue(0),
                        TextInput::make("title")
                            ->label('Titre')
                            ->live()
                            ->afterStateUpdated(function (Set $set, $state) {
                                $set('title', strtoupper($state));
                            })
                            ->required()
                            ->maxLength(255),
                        FileUpload::make('img')
                            ->required()
                            ->image()
                            ->imageEditor(),
                        Select::make('user_id')
                            ->relationship('user', 'name')
                            ->required()
                            ->searchable()
                            ->preload(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pid')
                    ->label('Rang'),
                TextColumn::make('title')
                    ->label('Titre'),
                ImageColumn::make('img'),
                TextColumn::make('user.name')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ReplicateAction::make(),
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
            'index' => Pages\ListOrgCharts::route('/'),
            'create' => Pages\CreateOrgChart::route('/create'),
            'edit' => Pages\EditOrgChart::route('/{record}/edit'),
        ];
    }    
}
