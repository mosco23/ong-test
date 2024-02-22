<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\NavbarResource\Pages;
use App\Models\Navbar;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class NavbarResource extends Resource
{
    protected static ?string $model = Navbar::class;

    protected static ?string $navigationGroup = "Navigation du site";
    protected static ?string $navigationIcon = 'heroicon-o-arrow-path-rounded-square';
    protected static ?string $modelLabel = "Menu";
    protected static ?string $pluralModelLabel = "Menus de navigation";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->maxLength(255)
                    ->required()
                    ->label('Nom'),
                Repeater::make('navtiems')
                    ->relationship("navitems")
                    ->label('Elements')
                    ->schema([
                        TextInput::make("name")
                            ->label('Nom'),
                        TextInput::make('link')
                            ->label('Lien')
                            ->disabled(function($state){
                                if(auth()->user()->isDev()){
                                    return false;
                                }
                                return $state != null;
                            }),
                    ])
                    ->orderColumn('navitems.sort')
                    ->defaultItems(0)
                    ->reorderableWithButtons()
                    ->cloneable()
                    ->itemLabel(fn (array $state): ?string => $state['name'] ?? null),

            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nom')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListNavbars::route('/'),
            'create' => Pages\CreateNavbar::route('/create'),
            'edit' => Pages\EditNavbar::route('/{record}/edit'),
        ];
    }    
}
