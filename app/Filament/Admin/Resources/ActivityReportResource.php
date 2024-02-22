<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ActivityReportResource\Pages;
use App\Filament\Admin\Resources\ActivityReportResource\RelationManagers;
use App\Models\ActivityReport;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActivityReportResource extends Resource
{
    protected static ?string $model = ActivityReport::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                        Textarea::make('description')
                            ->maxLength(255)
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
                    ->label('Description'),
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
            'index' => Pages\ListActivityReports::route('/'),
            'create' => Pages\CreateActivityReport::route('/create'),
            'edit' => Pages\EditActivityReport::route('/{record}/edit'),
        ];
    }    
}
