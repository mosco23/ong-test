<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\GroupProgActivityResource\Pages;
use App\Filament\Admin\Resources\GroupProgActivityResource\RelationManagers;
use App\Models\GroupProgActivity;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GroupProgActivityResource extends Resource
{
    protected static ?string $model = GroupProgActivity::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = "Groupe de programme d'activité";
    protected static ?string $pluralModelLabel = "Groupes de programmes d'activité";
    protected static ?string $navigationGroup = "Nos activités";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
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
            'index' => Pages\ListGroupProgActivities::route('/'),
            'create' => Pages\CreateGroupProgActivity::route('/create'),
            'edit' => Pages\EditGroupProgActivity::route('/{record}/edit'),
        ];
    }    
}
