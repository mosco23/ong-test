<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\StatResource\Pages;
use App\Models\Stat;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ReplicateAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StatResource extends Resource
{
    protected static ?string $model = Stat::class;

    protected static ?string $modelLabel = "Statistique";
    protected static ?string $navigationIcon = 'heroicon-m-chart-pie';

    static function getFormIcons() : array {
        $directory = base_path("/vendor/blade-ui-kit/blade-heroicons/resources/svg");
        $fileList = scandir($directory);
        $fileList = array_diff($fileList, ['.', '..']);
        $fileList = array_map(function($svg){
            return explode(".", $svg)[0];
        }, $fileList);
        $fileList = array_combine($fileList, $fileList);

        return $fileList;
    }
    public static function form(Form $form): Form
    {
        
        return $form
            ->schema([
                TextInput::make('count')
                    ->required()
                    ->label('Chiffre'),
                TextInput::make('description')
                    ->required(),
                Select::make('icon')
                    ->options(static::getFormIcons())
                    ->searchable(),
                ColorPicker::make('color')
                    ->required()
            ]);
    }

    static function getTableIcon($key) {
        return static::getFormIcons()[$key];
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                IconColumn::make('icon')
                ->icon(fn (string $state): string => static::getTableIcon($state)),
                TextColumn::make('count')
                    ->label('Chiffre')
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                ReplicateAction::make(),
                
            ])
            ->bulkActions([
                BulkActionGroup::make([
                   DeleteBulkAction::make(),
                ]),
            ])
            ->allowDuplicates();
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
            'index' => Pages\ListStats::route('/'),
            'create' => Pages\CreateStat::route('/create'),
            'edit' => Pages\EditStat::route('/{record}/edit'),
        ];
    }    
}
